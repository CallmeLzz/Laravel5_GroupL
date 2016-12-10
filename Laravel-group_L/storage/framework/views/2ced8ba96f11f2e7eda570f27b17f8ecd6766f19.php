<!DOCTYPE html>
<html>
  <head>
    <title></title>
  <style type="text/css">
    h1{
      font-size: 30px;
      color: #fff;
      text-transform: uppercase;
      font-weight: 300;
      text-align: center;
      margin-bottom: 15px;
    }
    table{
      width:100%;
      table-layout: fixed;
    }
    .tbl-header{
      background-color: rgba(255,255,255,0.3);
     }
    .tbl-content{
      height:300px;
      overflow-x:auto;
      margin-top: 0px;
      border: 1px solid rgba(255,255,255,0.3);
    }
    th{
      padding: 20px 15px;
      text-align: left;
      font-weight: 500;
      font-size: 12px;
      color: #fff;
      text-transform: uppercase;
    }
    td{
      padding: 15px;
      text-align: left;
      vertical-align:middle;
      font-weight: 300;
      font-size: 12px;
      color: #fff;
      border-bottom: solid 1px rgba(255,255,255,0.1);
    }


    /* demo styles */

    @import  url(http://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
    body{
      background: -webkit-linear-gradient(left, #25c481, #25b7c4);
      background: linear-gradient(to right, #25c481, #25b7c4);
      font-family: 'Roboto', sans-serif;
    }
    section{
      margin: 50px;
    }


    /* follow me template */
    .made-with-love {
      margin-top: 40px;
      padding: 10px;
      clear: left;
      text-align: center;
      font-size: 10px;
      font-family: arial;
      color: #fff;
    }
    .made-with-love i {
      font-style: normal;
      color: #F50057;
      font-size: 14px;
      position: relative;
      top: 2px;
    }
    .made-with-love a {
      color: #fff;
      text-decoration: none;
    }
    .made-with-love a:hover {
      text-decoration: underline;
    }


    /* for custom scrollbar for webkit browser*/

    ::-webkit-scrollbar {
        width: 6px;
    } 
    ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    } 
    ::-webkit-scrollbar-thumb {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    }
  </style>
  </head>
  <body>
    <section>
      <!--for demo wrap-->
      <h1>Fixed Table header</h1>
      <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Level</th>
              <th>Parents</th>
            </tr>
          </thead>
        </table>
      </div>
      <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
          <tbody>
          <?php if(isset($menu)): ?>
            <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <tr>
              <td><a href="showData?menu_id=<?php echo e($value['menu_id']); ?>"><?php echo e($value['menu_id']); ?></a></td>
              <td><?php echo e($value['menu_title']); ?></td>
              <td><?php echo e($value['menu_level']); ?></td>
              <td><?php echo e($value['menu_parents']); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
          <?php endif; ?>
          </tbody>
        </table>
      </div>
    </section>
    <!-- follow me template -->
    <div class="made-with-love">
      Made with
      <i>♥</i> by
      <a target="_blank" href="#">Nikhil Krishnan</a>
    </div>
  </body>
</html>