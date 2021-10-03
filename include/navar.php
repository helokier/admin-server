 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
     <div class="container-fluid">
         <div class="navbar-header">
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
             </button>
             <a class="navbar-brand" href="dasborad.php"><span>SIDA</span>STORE</a>
             <ul class="user-menu">
                 <li class="dropdown pull-right">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user">
                             <use xlink:href="#stroked-male-user"></use>
                         </svg> User <span class="caret"></span></a>
                     <ul class="dropdown-menu" role="menu">
                         <li><a href="#"><svg class="glyph stroked male-user">
                                     <use xlink:href="#stroked-male-user"></use>
                                 </svg> Profile</a></li>
                         <li><a href="#"><svg class="glyph stroked gear">
                                     <use xlink:href="#stroked-gear"></use>
                                 </svg> Settings</a></li>
                         <li><a href="logout.php"><svg class="glyph stroked cancel">
                                     <use xlink:href="#stroked-cancel"></use>
                                 </svg> Logout</a></li>
                     </ul>
                 </li>
             </ul>
         </div>

     </div><!-- /.container-fluid -->
 </nav>
 <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
     <form role="search">
         <div class="form-group">
             <input type="text" class="form-control" placeholder="Search">
         </div>
     </form>
     <ul class="nav menu">

         <li class="active"><a href="dasborad.php"><svg class="glyph stroked home">
                     <use xlink:href="#stroked-home" />
                 </svg> Trang Chủ</a></li>
         <li><a href="ab.php"><svg class="glyph stroked calendar">
                     <use xlink:href="#stroked-calendar"></use>
                 </svg> Danh Mục</a></li>
         <li><a href="product.php"><svg class="glyph stroked bag">
                     <use xlink:href="#stroked-bag"></use>
                 </svg> Sản Phẩm</a></li>
         <li><a href="kdproduct.php"><svg class="glyph stroked bag">
                     <use xlink:href="#stroked-bag"></use>
                 </svg> Kiểm Duyệt Sản Phẩm</a></li>
         <li><a href="oder.php"><svg class="glyph stroked pencil">
                     <use xlink:href="#stroked-table"></use>
                 </svg> Đơn Đặt Hàng</a></li>
         <li><a href="kdorder.php"><svg class="glyph stroked pencil">
                     <use xlink:href="#stroked-table"></use>
                 </svg> Kiểm Duyệt Đơn Đặt Hàng</a></li>

         <li role="presentation" class="divider"></li>
         <li><a href="nv.php"><svg class="glyph stroked male-user">
                     <use xlink:href="#stroked-male-user"></use>
                 </svg> Quản Lý</a></li>
         <li><a href="kh.php"><svg class="glyph stroked male-user">
                     <use xlink:href="#stroked-male-user"></use>
                 </svg> Khách Hàng</a></li>
     </ul>
     <!-- <div class="attribution">Template by <a href="http://www.medialoot.com/item/lumino-admin-bootstrap-template/">Medialoot</a><br /><a href="http://www.glyphs.co" style="color: #333;">Icons by Glyphs</a></div> -->
 </div>
 <!--/.sidebar-->