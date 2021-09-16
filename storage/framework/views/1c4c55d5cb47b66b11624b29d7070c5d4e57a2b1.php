
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
     <div class="container">
         <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
             <?php echo e(config('app.name', 'Laravel')); ?>

         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
             <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <!-- Left Side Of Navbar -->
             <ul class="navbar-nav mr-auto">

             </ul>


             <ul class="navbar-nav me-auto mb-2 mb-md-0">
               <li><a href="/">Home</a></li>
               <li><a href="/services">Services</a></li>
               <li><a href="/posts">timeline</a></li>
               <li><a href="/about">About</a></li>
             </ul>
             <div class="panel-body">
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <h3>home</h3>
                </div>
             <!-- Right Side Of Navbar -->
             <ul class="navbar-nav ml-auto">
                 <!-- Authentication Links -->
                 <?php if(auth()->guard()->guest()): ?>
                     <li class="nav-item">
                         <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                     </li>
                     <?php if(Route::has('register')): ?>
                         <li class="nav-item">
                             <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                         </li>
                     <?php endif; ?>
                 <?php else: ?>

                     <li class="nav-item">
                         <a  class="nav-link" href="#" role="button"  v-pre>
                             <?php echo e(Auth::user()->name); ?>

                         </a>
                        <ul class="navbar-nav ml-auto" role="menu">
                            <li><a href="/home">Home</a></li>
                            <li>
                         <div class="nav-item-right" >
                             <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 <?php echo e(__('Logout')); ?>

                             </a>

                             <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                 <?php echo csrf_field(); ?>
                             </form>
                            </li>
                        </ul>
                         </div>
                     </li>
                 <?php endif; ?>
             </ul>
         </div>
     </div>
 </nav>
<?php /**PATH H:\xampp\htdocs\Student_record\resources\views/inc/navbar.blade.php ENDPATH**/ ?>