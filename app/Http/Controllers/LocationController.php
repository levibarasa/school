<?php

namespace App\Http\Controllers;

use App\Models\Constituency;
use App\Models\County;
use App\Models\Payment;
use App\Models\User;
use App\Models\Member;
use App\Models\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LocationController extends Controller
{
    //
    public function index(Request  $request){

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://frozen-basin-45055.herokuapp.com/api/wards?county=".$request->county,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ));

        $response = curl_exec($curl);

        curl_close($curl);



        foreach (json_decode($response) as $wards){

        }

        return response(json_decode($response));


    }

    public function register(Request $request){
    \Log::info($request->all());

        //dd($request->docnumber);

        //apa

        \Validator::make($request->all(), [
            'email' => 'required|unique:users',
            'docnumber' => 'required|unique:users',
        ])->validate();

   $user=User::create([ 
            'name' => $request->firstname.' '.$request->lastname,
            'email' => $request->email,
            'password' => Hash::make("testing"),
            'county' =>$request->county,
            'ward'=>$request->ward, 
            'constituency'=>$request->constituency,
            'phonenumber'=>$request->phonenumber,
            'docnumber'=>$request->docnumber

        ]);

        $mpesa= new \Safaricom\Mpesa\Mpesa();

        $LipaNaMpesaPasskey="bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
        $TransactionType="CustomerPayBillOnline";
        $Amount=1;
        $PartyA=$request->phonenumber;
        $PartyB=174379;
        $PhoneNumber=$request->phonenumber;
        $CallBackURL=env("APP_URL")."/api/payment_result";
        $AccountReference=$user->id;
        $TransactionDesc="PAYBILL";
        $Remarks="PDP";
        $stkPushSimulation=$mpesa->STKPushSimulation(174379, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks);
        \Log::info($stkPushSimulation);

        Member::create([
                "user_id"=>$user->id,
                "category"=>"Imara",
                "status"=>"0",
                "checkoutid"=> json_decode($stkPushSimulation)->CheckoutRequestID,
                "name"=>$request->firstname,
                "phonenumber"=>$request->phonenumber
        ]);


        Payment::create([
            "reference"=> json_decode($stkPushSimulation)->CheckoutRequestID,
            "amount"=>1,
            "payment_method"=>"MPESA",
            "payment_type"=>"MEMBERSHIP",
            "payer"=>$request->firstname.' '.$request->lastname,
        ]);




        return redirect('complete_registartion/'.$user->id);



    }
    public function counties(Request $request){

        $county_id=County::where("county_name",$request->county)->first()->county_code;

        return Constituency::where("county_code",$county_id)->get();

    }


    public function wards(Request $request){

        $constituency_code=Constituency::where("constituency_name",$request->constituency_name)->first()->constituency_code;
      return   Ward::where("constituency_code",$constituency_code)->get();

    }

    public function volunteers(Request $request){
        $volunteers = \DB::table('volunteers')->get();
       return   $volunteers;

    }





}
