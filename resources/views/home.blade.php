
           @extends('layouts.main')
           @section('container')

            <center><p><h1>Apa Itu GIT dan Web Server?</h1></p></center><p><h3><img src="img/th2.png" width="100" height="100" alt=""> 1. Group Include Tour (GIT)</h3></p><p><h6>Secara Singkat <b>Include Tour (GIT)</b> Adalah salah satu dari <b>VCS (Version Control System).</b> <b>Version Control System</b> Biasa disebut juga dengan <b>Revision Control System</b> atau Source Code Management. GIT adalah sistem yang mengelola perubahan dari sebuah Dokumen, Program Desktop, Website, dan beberapa kumpulan informasi lain.</h6></p>
                <p><h6>Berikut Adalah Hal-Hal Yang Bisa Didapatkan Jika Kita Menggunakan Version Control System</h6></p>
                <p>
                  <ul>
                <li>
                  Dapat Melacak Versi/Histori Perubahan
                </li>
                <li>
                  Berkemungkinan Dapat Bekerja Kolaborasi dengan Lebih Baik
                </li>
                <li>
                  Dapat Mengetahui Siapa yang Melakukan dan Kapan Perubahan Tersebut terjadi.
                </li>
                <li>
                  Dapat Memungkinkan Kita untuk Kembali ke Keadaan sebelum Perubahan (Checkout)
                </li>
                </ul>
                </p>
                <p><h6>
                  Istilah-Istilah dalam Group Include Tour (GIT)
                </h6></p>
                <ul class="list-unstyled">
                  <li>
                    Folder Project
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                      <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                    </svg><b> Repository/Repo</b></p>
                  </li>
                  <li>
                    Rekaman Atau History/Snapshot
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                      <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                    </svg><b> Commit</b></p>
                  </li>
                  <li>
                    Penanda Unik Pada Commit
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                      <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                    </svg><b> Hash</b></p>
                  </li>
                  <li>
                    Berpindah Ke Sebuah Commit
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                      <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                    </svg><b> Checkout</b></p>
                  </li>
                  <li>
                    Cabang Bebas Dari Sebuah Commit
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                      <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                    </svg><b> Branch</b></p>
                  </li>
                  <li>
                    Menggabungkan Cabang Atau Branch
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                      <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                    </svg><b> Merge</b></p>
                  </li>
                  <li>
                    Sumber Memiliki Repo
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                      <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                    </svg><b> Remote</b></p>
                  </li>
                  <li>
                    Mengambil Repo dari Remote
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                      <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                    </svg><b> Clone</b></p>
                  </li>
                  <li>
                    Mengirimkan Commit Ke Repo
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                      <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                    </svg><b> Push</b></p>
                  </li>
                  <li>
                    Mengambil Commit Dari Repo
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                      <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                    </svg><b> Pull</b></p>
                  </li>
                </ul>
                <p><h4><center>Cara Install GIT di Windows</center></h4></p>
                <div class="youtube-vid1">
                <p><center><iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/hvcXCx2jkvU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></center></p>
                </div>
                <br>
                <p id="scrollspyHeading2"><h3><img src="img/github.png" width="100" height="100" alt=""> 2. GitHub</h3></p><p><h6>Ialah sebuah Website yang bisa kalian Kunjungi dengan Registrasi di <b><a style="color: black;" href="https://github.com/">https://github.com/</a></b> Dengan Pembuatan Akun, Dan Kalian bisa Upload File atau Membuat File didalamnya. Nanti Filenya bisa Dikelola Menggunakan <b>Version Control System (VCS).</b> Ini Adalah Kebalikannya, Kalian bisa Bekerja di <b>GitHub</b> tanpa Meng-Install <b>GIT</b></h6></p>
                <p><p><h4><center>Cara Memakai GitHub dan GIT di Windows</center></h4></p>
                <p><center><iframe class="video2" width="560" height="315" src="https://www.youtube.com/embed/u0zqtYU-rJA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></center></p></p>
                <br>
                <p id="scrollspyHeading3"><h3><img src="img/webserverr.png" width="100" height="115" alt=""> 3. Web Server</h3></p><p><h6><b>Web Server</b> adalah sebuah software (perangkat lunak) yang memberikan layanan berupa data. Berfungsi untuk menerima permintaan <b>HTTP</b> atau <b>HTTPS</b> dari klien atau kita kenal dengan <b>Web Browser</b> (Chrome, Firefox). Selanjutnya ia akan mengirimkan respon atas permintaan tersebut kepada client dalam bentuk halaman web. Secara Keseluruhan Web Server adalah penyedia Layanan Buat Klien.</h6></p>
                <p><h6>Berikut Adalah Jenis-Jenis Web Server</h6></p>
                <p>
                  <ul>
                    <li>
                      <p>
                        Web Server Apache
                        <br>
                        <img src="img/Apache.png" width="300" height="100" alt="">
                      </p>
                      Web server yang populer dan paling banyak digunakan kebanyakan orang, yaitu jenis Apache. Pada awalnya Apache didesain guna mendukung penuh sistem operasi UNIX. Selain cukup mudah dalam implementasinya, Apache juga memiliki beberapa program pendukung sehingga memberinkan layanan yang lengkap, seperti PHP, SSI dan kontrol akses. Berikut detailnya:
                      <ul>
                        <br>
                      <li>
                          PHP (Personal Home Page atau PHP Hypertext Processor)
                        <br>
                        Program semacam CGI, berfungsi memproses teks yang bekerja di server. Apache sangat mendukung PHP dengan menempatkannya sebagai salah satu modulnya (mod_php). Hal tersebut membuat PHP bekerja lebih baik.
                      </li>
                      <br>
                      <li>
                          SSI (Server Side Include)
                        <br>
                        Perintah yang bisa disertakan dalam bekas HTML. Kemudian ia dapat diproses oleh web server ketika pengguna mengaksesnya.
                      </li>
                      <br>
                      <li>
                          Access Control
                        <br>
                        Kontrol Akses dapat dijalankan berdasarkan nama host atau nomor IP CGI (Common Gateway Interface). Lalu yang paling umum untuk digunakan adalah perl (Practical Extraction and Report Language), disupport oleh Apache dengan menempatkannya sebagai modul (mod_perl).
                      </li>
                    </ul>
                    </li>
                    <br>
                    <li>
                      <p>
                        Web Server Nginx
                        <br>
                        <img src="img/ngnix.png" width="300" height="110" alt="">
                      </p>
                      Nginx yang merupakan salah satu web server dengan lisensi open source. Kelebihan dari Nginx adalah bisa menangani kebutuhan web server dengan trafik yang sangat tinggi. Hal ini tidak dapat dilakukan oleh web server jenis lainnya.
                      Nginx juga bisa mengedepankan performa, kemudahan, serta kecepatan. Itulah keunggulan dari Nginx dibandingkan dengan jenis-jenis web server lainnya. Berikut ini adalah beberapa kelebihan lain yang ditawarkan oleh Nginx.
                      <ul>
                        <br>
                        <li>
                          Kinerja yang Luar Biasa: Nginx memang didesain untuk bisa menangani banyak sekali permintaan klien. Nginx bahkan bisa menangani sampai sepuluh penerima setiap harinya.
                        </li>
                        <br>
                        <li>
                          Arsitektur Event-Based: Selanjutnya, Nginx memakai arsitektur event-based yang dinilai lebih bisa meminimalisir thread untuk memproses permintaan klien.
                        </li>
                        <br>
                        <li>
                          Fitur-fitur yang Kaya: Terakhir, Nginx memiliki berbagai macam fitur yang sangat bermanfaat bagi penggunanya. Beberapa fitur tersebut antara lain file serving, access control, URL rewriting, virtual hosts, reverse proxying, dan lain-lain.
                        </li>
                      </ul>
                    </li>
                    <br>
                    <li>
                      <p>
                        Web Server Apache Tomcat
                        <br>
                        <img src="img/apachetomcat.png" width="300" height="120" alt="">
                      </p>
                      Apache Tomcat berbeda Apache Server. Tomcat yang juga merupakan open source ini digunakan untuk menampung website berbasis Java.

                      Awalnya, Tomcat merupakan proyek Apache yang menjadi bagian dari Apache Server. Karena popularitasnya meningkat, kemudian dipisah antara Apache Server dan Tomcat. Sampai saat ini, Apache Tomcat masih terus dikembangkan oleh komunitas open source Java.
                    </li>
                    <br>
                    <li>
                      <p>
                        Web Server Lighttpd
                        <br>
                        <img src="img/Lighttpd.png" width="300" height="90" alt="">
                      </p>
                      Selanjutnya ada Lighttpd, web server bersifat open source yang hanya bisa berjalan pada komputer dengan sistem operasi Linux dan Unix atau turunan keduanya. Kelebihan dari Lighttpd adalah bisa mengatur CPU load yang dinilai lebih efisien. Selain itu, Lighttpd juga mempunyai fitur seperti SCGI, Output-Compression, URL-Writing, dan FastCGi. Kelebihan inilah yang membuat Lighttpd berbeda dari jenis-jenis web server lainnya.
                    </li>
                    <br>
                    <li>
                      <p>
                        Web Server IIS (Internet Information Services)
                        <br>
                        <img src="img/iis.png" width="300" height="90" alt="">
                      </p>
                      Kemudian, ada jenis web server IIS atau singkatan dari Internet Information Services. Untuk Windows versi lama seperti Windows 2000 dan Windows 2003, biasanya memakai web server berjenis IIS. Web server ini didukung oleh berbagai macam fitur dan komponen, mulai dari TCP/IP, DNS, sampai software untuk membuat situs web. Selain itu, IIS juga menjadi satu-satunya web server yang mendukung platform .NET dari Windows. Namun, IIS adalah web server yang berbayar.
                    </li>
                    <br>
                    <li>
                      <p>
                        Web Server Sun Java System
                        <br>
                        <img src="img/sunjava.png" width="300" height="150" alt="">
                      </p>
                      Sun Java System Web adalah web server open-source yang penggunaannya cukup mudah. Dengan tampilan visual dan Graphical User Interface (GUI) yang bersih, membuat penggunaan Sun Java System Web mudah untuk melakukan konfigurasi, mengatur, serta memonitor server web. Namun, komunitas pengguna Sun Java belum terlalu banyak. Kemudian, jenis log atau sistem password-nya juga dinilai cukup mudah ditembus oleh peretas.
                    </li>
                    <br>
                    <li>
                      <p>
                        Web Server Litespeed
                        <br>
                        <img src="img/litespeed.png" width="350" height="100" alt="">
                      </p>
                      Terakhir, ada web server Litespeed. Kelebihan dari Litespeed performa yang enam kali lebih cepat dari Apache. Selain itu, terdapat pula fitur Distributed Denial of Service (DdoS). DdoS adalah serangan peretas yang membanjiri traffic server, sistem, atau jaringan yang membuat server tidak bisa melayani permintaan informasi lagi.
                    </li>
                  </ul>
                </p>
                @endsection


                @section('container2')
            <center><h2 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Aplikasi Lainnya</h2></center>
            <img src="img/subversion.png" height="100px" width="100px" alt=""><h5 class="mt-0">Subversion</h5>
            <font style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><p>Subversion, atau dikenal juga dengan nama svn atau SVN, adalah suatu perangkat lunak sumber terbuka pengendali versi yang dapat mengatur proses pengembangan perangkat lunak yang dilakukan oleh suatu kelompok pemrogram yang terpisah menjadi runut dan teratur.</p></font>

            <img src="img/gitlab.png" height="100px" width="100px" alt=""><h5 class="mt-0">GitLab</h5>
            <p>GitLab adalah sebuah manajer repositori Git berbasis web dengan fitur wiki dan pelacakan masalah, menggunakan lisensi sumber terbuka, dikembangkan oleh GitLab Inc. Perangkat lunak ini ditulis oleh Dmitriy Zaporozhets dan Valery Sizov dari Ukraina. Kode yang ditulis adalah Ruby.</p>

            <img src="img/bitbucket.png" height="100px" width="100px" alt=""><h5 class="mt-0">BitBucket</h5>
            <p>Bitbucket adalah sebuah layanan hosting yang berbasis web untuk kode sumber dan pembangunan proyek yang menggunakan Mercurial ataupun sistem kendali versi Git yang dimiliki oleh Atlassian. Bitbucket menawarkan paket akun komersial dan gratis</p>
                 @endsection
