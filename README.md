# Dokumentasi 4 Sehat 5 Sempurna

## Projek Pemrograman Web Kelas XI RPL

Dokumentasi ini berisi hal-hal yang berhubungan dengan projek 4 Sehat 5 Sempurna.

Anggota Kelompok :

1. Efrend
2. Khenjy
3. Markus
4. Natasha

Tema Pekerjaan Kelompok : Website Pembuat Blog

Link Edit Desain Figma : <https://www.figma.com/file/159sp4lSnyMxjDbbn0s5Rb/4-Sehat-5-Sempurna>
Berisi desain yang sedang dikerjakan oleh kelompok ini.

Link Repository Data Projek : <https://github.com/Prog-Web-XI-RPL/4sehat5sempurna-data>
Berisi bahan-bahan yang akan dipakai dalam repository noirr.

Link Repository Projek : <https://github.com/Prog-Web-XI-RPL/4sehat5sempurna>
Berisi projek yang sedang dikerjakan oleh kelompok ini.

## Keterangan Isi Folder yang dipakai Dalam Repository Noirr

### assets

Berisi folder-folder yang digunakan sebagai bahan dari web.

1. css
   Berisi css-css yang digunakan dalam membuat desain
   - 4s5s.css
   - 4s5s.min.css

2. icon
   Berisi icon-icon yang digunakan sebagai button, berekstensi svg
   - btnprofile.svg
   - btnback.svg
   - btnforward.svg
   - btndownload.svg
   - btnmessage.svg
   - btnfavorites.svg
   - btnnotification.svg
   - btnkart.svg
   - btnhelp.svg
   - btnup.svg
   - checkbox.svg
   - checkboxfill.svg

3. img
   Berisi gambar-gambar berekstensi jpg atau png untuk digunakan dalam website \* \* \* \* \* \*

### controllers

1. application\controllers\Blog.php
2. application\controllers\Editor.php
3. application\controllers\index.html
4. application\controllers\Komentar.php
5. application\controllers\Main.php
6. application\controllers\Readme.php
7. application\controllers\Welcome.php

### model

1. application\models\Blog_mdl.php
2. application\models\Editor_mdl.php
3. application\models\index.html
4. application\models\Komentar_mdl.php
5. application\models\View_mdl.php

### views

1. admin
   Berisi halaman-halaman yang ditujukan untuk admin saja
   - application\views\admin\_partials
      1. application\views\admin\_partials\blog
         - application\views\admin\_partials\blog\data_blog.php
         - application\views\admin\_partials\editor\form_addeditor.php
         - application\views\admin\_partials\blog\form_editblog.php
         - application\views\admin\_partials\blog\tabel_blog.php
      2. application\views\admin\_partials\editor
         - application\views\admin\_partials\editor\data_editor.php
         - application\views\admin\_partials\editor\form_addblog.php
         - application\views\admin\_partials\editor\form_addeditor.php
         - application\views\admin\_partials\editor\form_editeditor.php
         - application\views\admin\_partials\editor\tabel_editor.php
      3. application\views\admin\_partials\komentar
         - application\views\admin\_partials\komentar\data_komentar.php
         - application\views\admin\_partials\komentar\form_addkomentar.php
         - application\views\admin\_partials\komentar\form_editkomentar.php
         - application\views\admin\_partials\komentar\tabel_komentar.php
      4. application\views\admin\_partials\footeradm.php
      5. application\views\admin\_partials\head.html
      6. application\views\admin\_partials\headeradm.php
      7. application\views\admin\_partials\sidebaradm.php

2. editor
   Berisi halaman-halaman yang ditujukan untuk editor saja
   - application\views\editor\_partials
      1. application\views\editor\_partials\editor_blog.php
      2. application\views\editor\_partials\footer.php
      3. application\views\editor\_partials\form_buatblog.php
      4. application\views\editor\_partials\form_editblog.php
      5. application\views\editor\_partials\head.html
      6. application\views\editor\_partials\header.php
      7. application\views\editor\_partials\table_komentar.php
   - application\views\editor\editor_addblog.php
   - application\views\editor\editor_editblog.php
   - application\views\editor\editor.php

3. Public
   Berisi halaman-halaman yang ditujukan untuk publik
   - application\views\public\_partials
      1. application\views\public\_partials\footer.php
      2. application\views\public\_partials\form_addkomentar.php
      3. application\views\public\_partials\form_editkomentar.php
      4. application\views\public\_partials\form_login.php
      5. application\views\public\_partials\form_signup.php
      6. application\views\public\_partials\head.html
      7. application\views\public\_partials\header.php
      8. application\views\public\_partials\navigation_article.php
      9. application\views\public\_partials\new_article.php
   - application\views\public\about.php
   - application\views\public\buahbuahan.php
   - application\views\public\home.php
   - application\views\public\index.php
   - application\views\public\laukpauk.php
   - application\views\public\login.php
   - application\views\public\makananpokok.php
   - application\views\public\penghubung.php
   - application\views\public\sayur.php
   - application\views\public\signup.php
   - application\views\public\susu.php
