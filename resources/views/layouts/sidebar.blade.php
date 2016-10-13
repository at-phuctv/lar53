<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

   <!-- sidebar: style can be found in sidebar.less -->
   <section class="sidebar">

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
         <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
         </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
         <li class="header">DASHBOARD</li>
         <!-- Optionally, you can add icons to the links -->
         <li class="treeview">
            <a href="#"><i class="fa fa-link"></i> <span>Groups Users</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="{!! route('users.index') !!}"><i class="fa fa-user"></i> <span>Users</span></a></li>
               <li><a href="#"><i class="fa fa-user-secret"></i> <span>Admin Users</span></a></li>
            </ul>
         </li>
         <li class="header">MANAGER</li>
         <li><a href="{!! route('categories.index') !!}"><i class="fa fa-inbox"></i> <span>Category</span></a></li>
         <li><a href="{!! route('news.index') !!}"><i class="fa fa-newspaper-o"></i> <span>News</span></a></li>
         <li><a href="{!! route('comments.index') !!}"><i class="fa fa-comment-o"></i> <span>Comment</span></a></li>
         <li><a href="{!! route('reply-comments.index') !!}"><i class="fa fa-reply"></i> <span>ReplyComment</span></a></li>
      </ul><!-- /.sidebar-menu -->
   </section>
   <!-- /.sidebar -->
</aside>