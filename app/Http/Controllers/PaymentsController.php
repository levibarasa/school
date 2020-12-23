<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Safaricom\Mpesa\Mpesa;

class PaymentsController extends Controller
{
    //

    public function index(Request  $request){

        \Log::info($request->all());

    // dd($request->all()["Body"]["stkCallback"]["ResultCode"]);
    // dd($request->all()["Body"]["stkCallback"]["CallbackMetadata"]["Item"][1]["Value"]);




    if($request->all()["Body"]["stkCallback"]["ResultCode"]==0) {
        $member = Member::where('checkoutid', $request->all()["Body"]["stkCallback"]["CheckoutRequestID"])->first();
        $payment = Payment::where('reference', $request->all()["Body"]["stkCallback"]["CheckoutRequestID"])->first();
        $payment->mpesaref=($request->all()["Body"]["stkCallback"]["CallbackMetadata"]["Item"][1]["Value"]);
        $payment->save();

        if ($member) {

            User::where('id',$member->user_id)->update(["feepaid"=>1]);

        $data = array(
            'data' =>
                array(
                    0 =>
                        array(
                            'message_bag' =>
                                array(
                                    'numbers' => $member->phonenumber,
                                    'message' => "Dear ".$member->name." Thank you for registering with PDP.\n Your application is under review.",
                                    'sender' => 'DEPTHSMS',
                                ),
                        ),
                ),
        );
         self::sendSms($data);

    }else{

            //invlid checkout id
        }


    }else{
        //payment gone wrong

    }



    }


    static function  sendSms($data){

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://ujumbesms.co.ke/api/messaging",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "X-Authorization: NzgzYzRhNWUyMDU5YjNhYjhhMzY2ODYzNzU3MTU1",
                "email: munenelewy77@gmail.com",
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        \Log::info($response);


    }


    public function complete($id){

       $user= User::find($id);

        return view("membership.reset")->with(["userdata"=>$user]);

    }

    public function update(Request  $request){

        $user= User::find($request->id);

        Auth::login($user);

        //return redirect("/dashboard");
        return redirect("/home");
       // return view("membership.reset")->with(["userdata"=>$user]);

    }


    public function verify_view(){
        return view("membership.verify");
    }

    public function verify(Request $request){

       $member=User::where("docnumber",$request->docnumber)->where("name",$request->firstname.' '.$request->lastname)->where("verified",1)->first();

        $result=["status"=>"danger","message"=>ucfirst($request->firstname.' '.$request->lastname)." is not a PDP member"] ;



       if($member){

           $result=["status"=>"success","message"=>ucfirst($request->firstname.' '.$request->lastname).' is a verified PDP Member'];



       }
        return view("membership.verify")->with(["userdata"=>$result]);

    }

     public function donate(Request $request){


        return view("membership.donate");

     }


     public function getinv(Request $request){

         return view("membership.involved");

     }

    public function donateaction(Request $request){

        $mpesa= new Mpesa();

        $LipaNaMpesaPasskey="bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
        $TransactionType="CustomerPayBillOnline";
        $Amount=$request->amount;
        $PartyA=$request->phonenumber;
        $PartyB=174379;
        $PhoneNumber=$request->phonenumber;
        $CallBackURL=env("APP_URL")."/api/payment_result";
        $AccountReference="DONATION";
        $TransactionDesc="PAYBILL";
        $Remarks="PDP";
        $stkPushSimulation=$mpesa->STKPushSimulation(174379, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks);
        $message="";
        $status="";
        $data=json_decode($stkPushSimulation);
        if( isset($data->CheckoutRequestID)) {
            //key exists, do stuff
            Payment::create([
                "reference"=>$data->CheckoutRequestID,
                "amount"=>$request->amount,
                "payment_method"=>"MPESA",
                "payment_type"=>"DONATION",
                "payer"=>$request->firstname.' '.$request->lastname,
            ]);

            $status='success';
            $message="Donation Request  Processed  successfully please check your phone to complete the transaction";
        }else{
            $message=$data->errorMessage;
            $status='error';
        }

        \Log::info($stkPushSimulation);
           \Log::info(env("APP_URL")."/api/payment_result");



        return back()->with($status,$message);

    }


    public function getinvaction(Request $request){

        //send mail here


        $options = $request->all();



        $validator = Validator::make($options, [
            'firstname' => 'required',
            'lastname'=>'required',
            'phonenumber' => 'required',
            'constituency' => 'required',
            'county' => 'required',
           // 'email' => 'required',
            'activities'=>'required'

        ])->validate();

        $options['activities']=json_encode($options['activities']);

        \App\Models\Volunteer::Create($options);


        return back()->with('success','Request Processed  successfully. We will reach out soon');
    }



    public function testMpesa(Request $request){


        $mpesa= new Mpesa();

        $LipaNaMpesaPasskey="bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
        $TransactionType="CustomerPayBillOnline";
        $Amount=$request->amount;
        $PartyA=$request->phonenumber;
        $PartyB=174379;
        $PhoneNumber=$request->phonenumber;
        $CallBackURL=env("APP_URL")."/api/payment_result";
        $AccountReference="";
        $TransactionDesc="PAYBILL";
        $Remarks="PDP";
        $stkPushSimulation=$mpesa->STKPushSimulation(174379, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks);
        \Log::info($stkPushSimulation);



       return $stkPushSimulation;

    }





}
