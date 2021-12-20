<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>  <?php $titleSite ="Usuarios de sistemas"?>
     <?php include_once '../../includes/cabeceras/header.php'; ?>
     
     <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
         <div
           class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
           <h1 class="h2"><?php echo $titleSite?></h1>
           <div class="btn-toolbar mb-2 mb-md-0">
            <!--  <div class="btn-group mr-2">
               <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
               <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
             </div>
             <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
               <span data-feather="calendar"></span>
               This week
             </button> -->
           </div>
         </div>
 
         <h4>Gestionar usuarios:</h4>
         <div class="table-responsive">
           
         </div>
       </main>
     
       <?php include_once '../../includes/cabeceras/footer.php'; ?>
<?php 
}else{
     header("Location: ../index.php");
     exit();
}
 ?> 
       
 
