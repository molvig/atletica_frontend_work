 <?php 
            $day = date("l");
            $time="";

            if ($day == 'Monday') { $day = 'Måndag '; $time = "08:00-22:00";}
            if ($day == 'Tuesday') { $day = 'Tisdag '; $time = "08:00-22:00";}
            if ($day == 'Wednesday') { $day = 'Onsdag '; $time = "08:00-22:00";}           
            if ($day == 'Thursday') { $day = 'Torsdag '; $time = "08:00-22:00";}           
            if ($day == 'Friday') { $day = 'Fredag '; $time = "08:00-20:00";}
            if ($day == 'Saturday') { $day = 'Lördag '; $time = "10:00-18:00";}
            if ($day == 'Sunday') { $day = 'Söndag '; $time = "10:00-18:00" ;}  ?>