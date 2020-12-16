<?/* Template Name: week */
$f = fopen(get_template_directory_uri() . "/week.csv", "rt");
for ($i = 0; $data = fgetcsv($f, 1000, ","); $i++) {
    $week[$i] = $data;
}
fclose($f);
$s = fopen(get_template_directory_uri() . "/mounth.csv", "rt");
for ($i = 0; $data = fgetcsv($s, 1000, ","); $i++) {
    $mounth[$i] = $data;
}
fclose($s);

$part = partAll();
foreach ($part as $key => $value) {
    $partAllNik[$value['ID']] = partAllNik($value['ID']); //ID участников из базы\ Никнеймы из базы
}

foreach ($partAllNik as $key => $value) {
    $kil = array_search($value['meta_value'], weekMounthKilometrag($week));
    if (!empty($kil)) {
        partKilometrag($key, $kil);
    } else {
        partKilometrag($key, 0);
    }
    $kil_month = array_search($value['meta_value'], weekMounthKilometrag($mounth));
    if (!empty($kil_month)) {
        partKilometragMonth($key, $kil_month);
    } else {
        partKilometragMonth($key, 0);
    }
}
