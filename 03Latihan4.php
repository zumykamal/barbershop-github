<html>
    <head>
        <title> Penggunaan Switch - Case</tittle>
    </head>
<body>
    Hari ini:
    <?php
    $nama_hari = date("1");
    Switch ($nama_hari){
    case "Sunday";
    print ("Minggu");
    print "Waktu Istirahat";
    break;
    case "Monday";
    print ("Senin");
    print "Meeting awal minggu jam 08.00";
break;
case "Tuesday";
print ("Selasa ");
print "Pembukaan Workshop Diklat";
break;
case "Wednesday";
print ("Rabu");
print "Seminar Launching Window Vista di JHCC";
break;
case "Thrusday";
print ("Kamis");
print "Pertemuan Dengan Mahasiswa";
break;
case "Friday";
print ("Jum'at");
print "Jogging Bersama";
break;
case "Saturday";
print ("Sabtu");
print "Survey Harga Ke Dusit, Mangga Dua";
break;

}
?>
</body>
</html>