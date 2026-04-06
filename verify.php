<?php
// Function to check voting age
function checkvotingage() {
    //catch the data from from
    $fullname = $_POST['full_name'];
    $birthyear = $_POST['birth_year']; 

    //current year fixed as 2026
    $currentyear = 2026;
      $age = $currentyear - $birthyear;

        // Check if age >= 18
    if ($age >= 18) {
        echo "<p style='color:green; font-weight:bold;'>Verification Successful for $fullname</p>";
    } else {
        echo "<p style='color:red; font-weight:bold;'>Access Denied: Under 18 for $fullname</p>";
    }
}

// Call the function when page loads
checkVotingAge();
?>