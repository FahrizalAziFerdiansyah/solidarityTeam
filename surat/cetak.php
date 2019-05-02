
<?php
include 'config.php';
$id_surat=$_GET['id_surat'];
$query=mysqli_query($config,"SELECT * FROM tbl_surat_masuk WHERE id_surat='$id_surat'");
while ($row=mysqli_fetch_array($query)) {
    $asal_bidang=$row['asal_surat'];
    $asal_bidang_surat=$row['asal_surat_sub'];
    $tgl=$row['tgl_surat'];
    $no=$row['no_surat'];
    $disposisi=$row['disposisi'];
    $perihal=$row['isi'];
    $no_agenda=$row['kode'];
    

    # code...
}

session_start();
$nama=$_SESSION['username'];
$user=mysqli_query($config,"SELECT * FROM tbl_user WHERE username='$nama'");
while ($a=mysqli_fetch_array($user)) {
    $tujuan=$a['nama'];
    $tujuan_sub=$a['sub_bidang'];

    # code...
}
$tgl_diterima=date('l, d-m-Y');

?>
<HTML>        <style type="text/css">
            table {
                background: #fff;
                padding: 5px;
            }
            tr, td {
                border: table-cell;
                border: 1px  solid #444;
            }
            tr,td {
                vertical-align: top!important;
            }
            #right {
                border-right: none !important;
            }
            #left {
                border-left: none !important;
            }
            .isi {
                height: 300px!important;
            }
            .disp {
                text-align: center;
                padding: 1.5rem 0;
                margin-bottom: .5rem;
            }
            .logodisp {
                float: left;
                position: relative;
                width: 110px;
                height: 110px;
                margin: 0 0 0 1rem;
            }
            #lead {
                width: auto;
                position: relative;
                margin: 25px 0 0 75%;
            }
            .lead {
                font-weight: bold;
                text-decoration: underline;
                margin-bottom: -10px;
            }
            .tgh {
                text-align: center;
            }
            #nama {
                font-size: 2.1rem;
                margin-bottom: -1rem;
            }
            #alamat {
                font-size: 16px;
            }
            .up {
                text-transform: uppercase;
                margin: 0;
                line-height: 2.2rem;
                font-size: 1.5rem;
            }
            .status {
                margin: 0;
                font-size: 1.3rem;
                margin-bottom: .5rem;
            }
            #lbr {
                font-size: 20px;
                font-weight: bold;
            }
            .separator {
                border-bottom: 2px solid #616161;
                margin: -1.3rem 0 1.5rem;
            }
            @media print{
                body {
                    font-size: 12px;
                    color: #212121;
                }
                nav {
                    display: none;
                }
                table {
                    width: 100%;
                    font-size: 12px;
                    color: #212121;
                }
                tr, td {
                    border: table-cell;
                    border: 1px  solid #444;
                    padding: 8px!important;

                }
                tr,td {
                    vertical-align: top!important;
                }
                #lbr {
                    font-size: 20px;
                }
                .isi {
                    height: 200px!important;
                }
                .tgh {
                    text-align: center;
                }
                .disp {
                    text-align: center;
                    margin: -.5rem 0;
                }
                .logodisp {
                    float: left;
                    position: relative;
                    width: 80px;
                    height: 80px;
                    margin: .5rem 0 0 .5rem;
                }
                #lead {
                    width: auto;
                    position: relative;
                    margin: 25px 0 0 65%;
                }
                .lead {
                    font-weight: bold;
                    text-decoration: underline;
                    margin-bottom: -10px;
                }
                .lead1 {
                    margin-bottom: -10px;
                }
                #nama {
                    font-size: 20px!important;
                    font-weight: bold;
                    text-transform: uppercase;
                    margin: -10px 0 -20px 0;
                }
                .up {
                    font-size: 17px!important;
                    font-weight: normal;
                }
                .status {
                    font-size: 17px!important;
                    font-weight: normal;
                    margin-bottom: -.1rem;
                }
                #alamat {
                    margin-top: -15px;
                    font-size: 13px;
                }
                #lbr {
                    font-size: 17px;
                    font-weight: bold;
                }
                .separator {
                    border-bottom: 2px solid #616161;
                    margin: -1rem 0 1rem;
                }
                #bws {
                 width: auto;
                position: relative;
                margin: -5px 0 0 15%; 
                font-weight: bold;    
                }
                #nip1 {
                 width: auto;
                position: relative;
                margin: 0 0 0 65%;     
                }

            }
        </style>

      <body onload="window.print()">
        <!-- Container START -->

            <div id="colres">
                <div class="disp">';
                        <img class="logodisp" src="tes.png"/>
                        <h6 class="up">PEMERINTAH KABUPATEN BONDOWOSO</h6>
                        <h5 class="up" id="nama">DINAS PENDIDIKAN</h5><br/>
                       <span id="alamat"> Jalan Santawi No. 96 Telp. (0332) 421276 Fax : (0332) 427547</span> </br>
                       <span id="alamat"> e-mail : diknasbws@yahoo.co.id website : https://www.dikbud.bondowosokab.go.id</span>         
                    
                  
                </div>
                <div class="separator"></div><center>
                    <table rules="rows" class="bordered" id="tbl">
                        <tbody>
                            <tr>
                                <td class="tgh" id="lbr" colspan="5">LEMBAR DISPOSISI</td>
                            </tr>
                            <tr>
                                <td id="left" style="border-right: none" width="18%"><strong>Surat Dari </strong>
                                 <td id="left" style="border-right: none">: <?php echo $asal_bidang;?>/<?php echo $asal_bidang_surat;?></td>
                            </tr>
                            <tr><td id="right"><strong>Tanggal Surat</strong></td>

                               <td id="left" style="border-right: none" width="30%">: <?php echo $tgl;?></td>

                                <td id="right" width="12"><strong>Diterima Tanggal : <?php echo $tgl_diterima;?></strong>
								 
                            </tr>
                            <tr><td id="right"><strong>Nomor Surat</strong></td>

                               <td id="left" style="border-right: none" width="30%">: <?php echo $no;?></td>

                                <td id="right" width="12"><strong>No Agenda : <?php echo $no_agenda;?></strong>
                                 
                            </tr>
                                <tr class="isi">
                                <td colspan="2">
                                    <strong>Perihal : <?php echo $perihal;?></strong><br/>
                                    <div style="height: 50px;">

                                         <td id="right" width="12"><strong>Diteruskan kepada :  </strong>
                                         <p>1. <?php echo $tujuan;?> / <?php echo $tujuan_sub;?></p>
                                         <br><br>
                                         <p>2.</p>
                                         <br><br>
                                         <p>3.</p>


                                    </div>
                            <tr>

                                   
                                               </tbody>
            </table><br>
            <th> ISI DISPOSISI : <?php echo $disposisi;?>  </th>
        </center>
 <th><h4>Kepada Yth :</th><br>
 <th>1.SEKRETARIS</th><br>
 <th>2.KABID KETENAGAAN</th><br>
 <th>3.KABID TK/SD</th><br>
 <th>4.KABID SMP/SMK/SMA</th><br>          
 <th>5.KABID PENDIDIKAN NON FORMAL</th>
        </div>
        <div class="jarak2"></div>
    <!-- Container END -->

    </body>

