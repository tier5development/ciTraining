<!DOCTYPE html>
<html lang="en">
<?php include 'lunchviewheader.php';?>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            
            <div>
               
                <form action="<?php echo base_url().'Admin/logout'?>" method="post">
                    <input type="submit" value="logout" class="btn btn-default pull-right">
                </form>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse pull-right navChanages">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                     <li>
                     <a class="page-scroll" href="<?php echo base_url().'Admin'?>"><span class="glyphicon glyphicon-circle-arrow-left"></span>Back To Home</a>
                      </li>
                    <li>
                        <a class="page-scroll" href="#todaysorder">Today's Order</a>
                    </li>
                    <li>
                        <a href="addlunchitems">Add New Items</a>
                    </li>
                </ul>  
            </div>
        </div>
</nav>


  <?php include 'sideber.php';?>



 

 <div class="intro-section" id='list_print'>
        <div class="container-fluid">
            <div class='row'>
                <div class="col-sm-8"></div>
                <div class="col-sm-3">
                  <input type="button" value="Change Date" id="selectdate" class="btn btn-warning">
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>

        </br>

          <div class="container-fluid">
          	<div class='row'>
          		 <div class="col-sm-1"></div>
               <div class="col-sm-10" id="placedordr" align="center">
                
                    <table class="table table-bordered" >
                        <thead>
                          <tr>
            	              <td><strong>Date</strong></td>
            	              <td><strong>Employee Id</strong></td>
            	              <td><strong>Employee Name</strong></td>
            	              <td><strong>Shop Name</strong></td>
            	              <td><strong>Lunch Item</strong></td>
            	              <td><strong>Cost</strong></td>
            	              <td><strong><button id="deletallorder" class="btn btn-danger btn-sm" data-target="#cnfrmdltlunchorder" data-toggle="modal" >Delete All</button></strong></th>
            	             <td><strong><button id="printorder" class="btn btn-danger btn-sm">Print All</button></strong></th>
                            <td><strong><button id="printselected" class="btn btn-danger btn-sm" >Print Selected</button></strong></th>

                          </tr>
                        </thead>
                        <tbody id="lunchlist" align="center">
                        </tbody>
                    </table>   
               </div>
               <div class="col-sm-1"></div>
          	</div> 
          </div>
 </div>


<br><br><br><br><br>
       <div class="container container-fluid" id='new_print' style="margin-top:10px">
        <div class='row'>
        <div class="col-sm-10" style="margin-bottom:5px;"><a class="btn btn-danger" href="lunchorderview">Back</a></div>
        <div id='print_all' class="col-md-12 col-sm-12">
        </div>
         <a id="printfinalAll" class="btn btn-danger btn-md glyphicon glyphicon-print" >Print</a>
        </div></div>

<br>

      <div class="modal fade" id="deletelunchorder" role="dialog">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title deleteconfirm" align="center"><strong>Delete Sucessfull</strong></h4>
              </div>
              <div class="modal-body">
                <div class="col-sm-1"></div>
                <div class="col-sm-10" id="lunchdeletmsg" align="center"></div>
                <div class="col-sm-1"></div>
              </div>  
              <div class="modal-footer"></div>            
          </div>     
        </div>
      </div>

      <div class="modal fade" id="cnfrmdltlunchorder" role="dialog">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title deleteconfirm" align="center"><strong>Are You Sure That You Want To Delete All Records?</strong></h4>
            </div>
            <div class="modal-body">
              <div class="col-sm-1"></div>
              <div class="col-sm-10">
                    <button type="submit" class="btn btn-danger pull-left" id="yesdltall" data-dismiss="modal" >Yes</button>
                    <button type="submit" class="btn btn-danger pull-right" id="nodltall" data-dismiss="modal">No</button>
              </div>
              <div class="col-sm-1"></div>
            </div>
            <div class="modal-footer">
            
            </div>           
          </div>  
        </div>
      </div>



      <!--<div class="modal fade" id="printorderall" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title printconfirm" align="center"><strong>Print</strong></h4>
              </div>
              <div class="modal-body ">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                     <div id='print_all'>
                     </div>
                

                </div>
                <div class="col-sm-1"></div>
              </div>  
              <div class="modal-footer">
                <a id="printfinalAll" class="btn btn-danger btn-md glyphicon glyphicon-print" >Print</a>
              </div>            
          </div>     
        </div>
      </div>-->

      
      


      <div class="modal fade" id="printsingleorder" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title printconfirm" align="center"><strong>Print</strong></h4>
              </div>
              <div class="modal-body ">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                     <div id='printdiv' style='padding-left:30px;padding-right:30px;'>
                     </div>
                

                </div>
                <div class="col-sm-1"></div>
              </div>  
              <div class="modal-footer">
                <a id="printfinal" class="btn btn-danger btn-md glyphicon glyphicon-print" >Print</a>
              </div>            
          </div>     
        </div>
      </div>



   <div aria-labelledby="mySmallModalLabel" role="dialog" tabindex="-1" class="modal fade bs-example-modal-sm in" id='smallModal'>
   <div class="modal-dialog modal-sm"> <div class="modal-content">
    <div class="modal-header">
    <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button> 
    <h4 id="mySmallModalLabel" class="modal-title error">Error Selection</h4> 
    </div> 
    <div class="modal-body" id='no_select'>
    </div> 
    </div> 
    </div> 
    </div>



</body>
</html>