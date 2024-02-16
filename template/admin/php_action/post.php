<?php 
    require_once '../../includes/config.php';
 
    if(isset($_POST['post_question'])){
        $question_no=htmlentities(stripslashes(mysqli_real_escape_string($conn, $_POST['question_no'])));
        $option_a=htmlentities(stripslashes(mysqli_real_escape_string($conn, $_POST['option_a'])));
        $response_criteria_a=htmlentities(stripslashes(mysqli_real_escape_string($conn, $_POST['response_criteria_a'])));
        $option_b=htmlentities(stripslashes(mysqli_real_escape_string($conn, $_POST['option_b'])));
        $response_criteria_b=htmlentities(stripslashes(mysqli_real_escape_string($conn, $_POST['response_criteria_b'])));
        $user_id=htmlentities(stripslashes(mysqli_real_escape_string($conn, $_POST['user_id'])));

        if(empty($question_no) || empty($option_a) || empty($response_criteria_a) || empty($option_b) || empty($response_criteria_b)){
            header("Location: ../post_question.php?message=empty&question_no=$question_no&option_a=$option_a&response_criteria_a=$response_criteria_a&option_b=$option_b&response_criteria_b=$response_criteria_b&response_criteria_b=$response_criteria_b");
               exit();
        }else{

            $insertOption_a=mysqli_query($conn, "INSERT INTO tbl_options (question_no, user_id, option_text, response_criteria_id) VALUES ('$question_no','$user_id', '$option_a', '$response_criteria_a')") or die(mysqli_error($conn));
            $insertOption_b=mysqli_query($conn, "INSERT INTO tbl_options (question_no, user_id, option_text, response_criteria_id) VALUES ('$question_no','$user_id', '$option_b', '$response_criteria_b')") or die(mysqli_error($conn));
               if ($insertOption_a && $insertOption_b) {
                    // $message="Message Sent Successfully. Thank You";
                    header("Location: ../post_question.php?message=success");
            exit();
                }else{
                    header("Location: ../post_question.php?message=error&question_no=$question_no&option_a=$option_a&response_criteria_a=$response_criteria_a&option_b=$option_b&response_criteria_b=$response_criteria_b&response_criteria_b=$response_criteria_b");
            exit();
                } 
                }
            
            
    }