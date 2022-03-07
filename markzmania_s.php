<?php
    /*
    Plugin name: Markzmania
    Plugin URI: https://markzmania.com/
    Description: API Customization
    Author: WD Team
    Author URI: https://markzmania.com/
    Text Domain: markzmania.com
    Version: 1.0
    */
    add_actions('wpcf7_mail_sent','markzmania_st_cf7');
    function markzmania_st_cf7( $cf ){
        $title = $cf -> title;
        if( $title === "Enquiry"){
            $submission = WPCF7_Submission::get_instance();
            if( $submission ){
                $posted_data = $submission->get_posted_data();
                $name = $posted_data['your-name'];
                $email = $posted_data['your-email'];
                $tel = $posted_data['tel-77'];
                $courses = $posted_data['Courses'];
                $location = $posted_data['text-147'];
                $message = $posted_data['your-message'];

                var_dump($name);
                var_dump($email);
                var_dump($tel);
                var_dump($courses);
                var_dump($location);
                var_dump($message);
                $url = 'https://conceptninjas.com/ninjaprodparallel/screens/testLeadForm.php?corporateId=1062';
                $args = array(
                    'body' => array(
                        'name' => name,  
                        'email' => email,  
                        'tel' => tel,
                        'courses' => courses, 
                        'location' => location, 
                        'message' => message, 
                    )
                );
                wp_remote_post($url, $args);

                return;
            }
        }
    }
?>