<?php 

//========== Tipe Data =============
  //-------STRING---------
//   $x = "sekolah negri";
  
  // echo "halo ",$x, " beranam", "<br>";
  // print "chiwawa $x <br>";
  echo "<br>";
  //--------INTEGER & FLOAT--------
  //   $angka = 5;
  //   $angka1 = 6;
  //   $angka2 = 3.6;
  
  //-------STRING METHOD---------
  //   $next = "Hai Semuanya! ";
  //   echo strlen($next);
  //   echo "<br>";
  //   echo str_word_count($next);
  //   echo "<br>";
  //   echo str_replace("Hai", "Hola ",$next);
  //   echo "<br>";
  //   echo str_repeat("Hola Amigos ", 9);
  //   echo "<br>";
  //   echo str_repeat(str_replace("hai","Syala", $next),9 );
  //   echo "<br>";


  
  //=========== Operator Matrix ===============
  // $hasil = $angka + $angka2 * $angka1 ;
  // echo $hasil;
  
  
    //------ round rand(min, max) max, min
    // echo "Angka hari ini adlah ". rand(5, 8);
    // echo "<br>";
    // echo min($angka, $angka1, $angka2);
    echo "<br>";
    // echo max(2, 3, 8, 9);
    
    
    //=========== Tipe Data Array =====================
    // $kotak = array('anjing', 'kucing', 'dybala');
    // $name = ['Hilman', 'Rahmad', 'Erpan'];
    // print_r($kotak);
    
    // echo $kotak[1];
    echo "<br>";
    // echo $name[1];
    echo "<br>";
    
    //------ Metode Array --------
    // - array_unique
    // - _reverse
    // - shuffle
    // - count
    // - sort
    
    // print_r( array_unique($kotak) );
    echo "<br>";
    // print_r( array_reverse($kotak) );
    echo "<br>";
    // shuffle($kotak);
    // sort($kotak); // mengurutkan kata sesuai abjad
    // print_r($kotak);
    echo "<br>";
    echo "<br>";
    // echo count($kotak);

// ========== Assosiative Array =====================
//     $data = array("nama" => "Ahmed Kanabawi", 
//                   "usia" => 18,
//                   "pekerjaan" => "Vokalis Damkar"
// );
    // $data2 = ['istri' => 'Akeno ', 
    //               'umur' => 25,
    //               'hobi' => 'Masak Aer'
    // ];
    // print_r($data); 

    // $data['nama'] = "Muhammad Sumbul";
    // echo "Namanya adalah : ", $data['nama'];


// ============= Metode Associative Array =================
    /*
      - array_values
      - aray_keys
      - array_merge
    */
    // print_r( array_values($data));
    echo "<br>";
    // print_r( array_keys($data));
    echo "<br>";
    // print_r( array_merge($data, $data2));
    echo "<br>";
    echo "<br>";
    
    
// ============= Multi Dimension Array =======================
    // $data = array (
    //     array("programmer", "18" ,"tidur"),
    //     array("arsitek", "16" ,"makan"),
    //     array("designer", "21" ,"masak teh")
    // );
    /*
    Urutan output seperti penulisan matrix baris kolom di mmatematika
      00,  01,  02
      10,  11,  12
      20,  21,  22
    */ 

    // print_r($data);
    // echo $data[2][2];



// ============== For Looping ======================

        // $hewan = ['anjing', 'babi', 'coyotte', 'naga', 'sepatu', 'superdog', 'kau'];
        // for ($i=0; $i < count($hewan) ; $i++) { 
        //     echo "--------------";
        //     echo $hewan[$i];
        //     echo "--------------<br>";
        // };

        // foreach ($hewan as $h) {
        //     echo "--------------";
        //     echo $h;
        //     echo "--------------<br>";
        // };

    //---------- Foreach pada asosiative array ---------------
            // foreach ($data2 as $key => $v) {
            //     echo $key, " : " , $v, "<br>";
            // }
            echo "<br>";

    //----------- While dan Do While --------------------------
            // $i = 0;
            // while ($i < count($hewan) ) {
            //    echo "- ", $hewan[$i], "<br>";
            //     $i++;
            // };

        // do {
        //     echo "- ", $hewan[$i], "<br>";
        //         $i++;
        // } while ($i < count($hewan));



// ================ Tipe Data Boolean ============================
            // $boo1 = true;
            // $boo2 = false;



// =================== If dan Else ============================
    // -------- Operator Logika -----------------
            /*
            ==       : Sama dengan tapi masuk semuanya
            ===      : Sama dengan
            >        : Lebih besar
            >=       : Lebih Besar Dari
            <        : Lebih Kecil
            <=       : Lebih Kecil Dari
            !=       : Tidak Sama Dengan
            */   

            // $password = '123';
            // if ($password == '123') {
            //     echo 'anda dapat login';
            // }
            //  else {
            //     echo 'password anda salah <br>';
            // }


// ================== Function ====================================
                // function print_text( $txt, $pqr  ){
                //     $txt = "Washi ". $txt. "  ". $pqr;
                //     echo "============";
                //     echo $txt;
                //     echo "============";
                // }

                // function brk(){
                //     echo "<br>";
                // }


                // print_text("ASYLUM", 32);
                // brk();
                // print_text("ASHYLUMN", 12);
                // brk();
                // print_text("WASHYLMN", 77,);
                // brk();


// =================== Return Function =======================
                // function hitung($x, $y){
                //     $z = $x + $y;
                //     return $z;
                // }

                
                // echo "Hasil dari Penjumlahan Adalah ". hitung(2, 5) * 10;  


// ======================== Scope ===================================
                //     $a = 25;
                //     $b = 5;

                //     function hitung(){
                //         global $a, $b;
                //         // $m = $a + $b;
                //         $m = $GLOBALS['a'] + $GLOBALS['b'];
                //         return $m;
                //     }
                 

                //    echo hitung();


//================== Anonymous Function ===================================
                    $any = function($tik){
                        echo $tik;
                    }; 


                    $any("Kamu Cantik que ");


// ======================== Callback Function ======================================
                    function scream( $callback){
                        echo "WAAAAHHHHHH!!!! <br>";
                        // $callback();

                         if (is_callable($callback) ) { // menguji apakah dia fungsi atau bukan
                             call_user_func($callback, "UWAAHHH SGSSSS");
                         } else {
                          echo 'DIA ADALAH PENGHIATAN';
                         }
                    }

                    // scream(function(){
                    //     echo "UWWWOOOOGGHHHH!!!! <br>";
                    // });

                    $call = function($text){
                        echo $text;
                    };
            
                    scream($call);


                    // Var_dump = untuk memberikan keterangan yang ada didalamnya
                    //  die = untuk menghentikan fungsi



?>