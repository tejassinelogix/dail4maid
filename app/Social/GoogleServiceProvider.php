<?php

namespace App\Social;
use App\User;

class GoogleServiceProvider extends AbstractServiceProvider
{
   /**
     *  Handle Facebook response
     * 
     *  @return Illuminate\Http\Response
     */
    public function handle()
    {

        $userinfo = $this->provider->user();
        $user['name'] = $userinfo->getName();
            $user['email'] = $userinfo->getEmail();
            $user['id'] = $userinfo->getId();
 //        echo "<pre>";
 //        // print_r($user);
 //   echo  $create['email'].'this is email id';
 //    echo "<br>";
 // echo  $create['name'].'this is email id';
 // echo "<br>";
 // echo  $create['id'].'this is email id';
 //        die;
       // $user = $this->provider->fields([
       //              'name', 
       //              'email', 
       //              'id',                  
       //          ])->user();
       // echo "<pre>";
       // print_r($user);
       // die;

        //$existingUser = User::where('settings->google_id', $user['id'])->first();

        $existingUser = User::where('email', $user['email'])->first();
        // echo "<pre>";
        // print_r($existingUser);
        // die;
        if ($existingUser) {
            $settings = $existingUser['settings'];
            if (! isset($settings['google_id'])) {
                $settings['google_id'] = $user['id'];
                $existingUser->settings = $settings;
                $existingUser->save();
            }

            return $this->login($existingUser);
        }

        $newUser = $this->register([
            'name' => $user['name'],
            'email' =>$user['email'],
            'settings' => [
                'google_id' => $user['id'],                
            ]
        ]);        
         // echo "<pre>";
         // print_r($newUser);
         // die;
        return $this->login($newUser);
    }       
}