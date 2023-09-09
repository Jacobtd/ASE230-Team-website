function memberAge($dob, $currentDate) {
    $dobObj = new DateTime($dob);
    $currentDateObj = new DateTime($currentDate);

    $age = $dobObj->diff($currentDateObj)->y;

    return $age;
}
