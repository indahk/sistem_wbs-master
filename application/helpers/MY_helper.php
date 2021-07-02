<?php


        // any_in_array() is not in the Array Helper, so it defines a new function
        function any_in_array($needle, $haystack)
        {
            $needle = is_array($needle) ? $needle : array($needle);

            foreach ($needle as $item) {
                if (in_array($item, $haystack)) {
                    return TRUE;
                }
            }

            return FALSE;
        }

        // random_element() is included in Array Helper, so it overrides the native function
        function random_element($array)
        {
            shuffle($array);
            return array_pop($array);
        }

        // // funtioin pemberian grant access pada database
        // function grantAccessFor(array(''))
        // {
        //     if (!isset($_SESSION['name_admin'])) {
        //         $this->session->set_flashdata('message', '<div class="alert alert-danger">you are not logged in!!</div>');
        //         redirect('/');
        //     } else {
        //         $result['data'] = $this->pupukModel->allPupuk();
        //         $this->load->view('templates/index_header');
        //         $this->load->view('home/pupuk', $result);
        //         $this->load->view('templates/index_footer');
        // }
        // }

        //menyimpan setiap aksi yang terjadi pada suatu function
        function addLog($jenis_aksi, $keterangan_aksi)
        {
        }

        //function untuk mengaktifkan menu pada sidebar

        function activated_menu($menu)
        {
            $CI = &get_instance();
            $classname = $CI->router->fetch_class();

            return $classname == $menu ? 'nav-link active' : 'nav-link';
        }

        date_default_timezone_set('Asia/Jakarta');

function cccc($date)
{
	/* array hari dan bulan */
	$nama_hari  = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu");

	$nama_bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober",
	                    "November","Desember");

	/*  Memisahkan format tanggal, bulan, tahun dengan substring */
	$tahun   = substr($date, 0, 4);
	$bulan   = substr($date, 5, 2);
	$tanggal = substr($date, 8, 2);
	$waktu   = substr($date, 11, 5);

	//w Urutan hari dalam seminggu
	$hari    = date("w", strtotime($date));

	$result  = $nama_hari[$hari] . ", " .$tanggal. " " .$nama_bulan[(int)$bulan-1]. " " .$tahun. " " .$waktu. " WIB";
	//keterangan (int)$bulan-1 karena array dimulai dari index ke 0 maka bulan-1
	return $result;
}

function anti_injection($data)
{
	$filter = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
	return $filter;
}

function slug($s)
{
	$c = array (' ');
    $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');

    $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d

    $s = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
    return $s;
}


function rupiah($nominal)
{
	return 'Rp '.number_format($nominal, 0, ',', '.');
}

/** login codeIgniter menggunakan bycrypt **/

if(!function_exists('get_hash'))
{    
    function get_hash($PlainPassword)
    {
    	$option=[
                'cost'=>5,// proses hash sebanyak: 2^5 = 32x
    	        ];
    	return password_hash($PlainPassword, PASSWORD_DEFAULT, $option);
   }
}

if(!function_exists('hash_verified'))
{  
    function hash_verified($PlainPassword,$HashPassword)
    {
    	return password_verify($PlainPassword,$HashPassword) ? true : false;
   }
}
