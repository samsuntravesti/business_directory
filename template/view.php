<?php
 require_once('/home/git/Desktop/businessDirectory/api/config.php');
 require_once(SITE_URI . '/template/header.php');
 require_once(SITE_URI . '/api/functions.php');
 $organization = view();
?>
<section id="single">
   <div class="row" id="firmName"><?php echo $organization['name']; ?></div>
   <div class="row">
      <div class="dataName">
         <h4 class="tvyal">Տվյալներ</h4>
                  
         <span style="margin-left:34%">Համայնք</span>	<span class="dataResult" id="regionId"><?php echo $organization['region']; ?></span> <br> <br>
         <span style="margin-left:36%">Հասցե</span>	<span class="dataResult" id="addressId"><?php echo $organization['address']; ?></span>	<br> <br>
         <span style="margin-left:38%">Հեռ․</span>  	<span class="dataResult" id="phoneId"><?php echo $organization['phone']; ?></span> <br> <br>
         <span style="margin-left:33%">Ղեկավար</span>    <span class="dataResult" id="dirId"><?php echo $organization['president']; ?></span> <br> <br>
         <span style="margin-left:34%">Էլ․ փոստ</span>    <span class="dataResult" id="postId"><?php echo $organization['email']; ?></span> <br> <br>
         <span style="margin-left:34%">Վեբ֊կայք</span>   <span class="dataResult" id="webId"><?php echo $organization['website']; ?></span> <br> <br>
         <span style="margin-left:30%">Գործնեություն</span>   <span class="dataResult" id="activityId"><?php echo $organization['activity']; ?></span> <br> <br>			
         <span style="margin-left:14%">Կազմակերպաիրավական տեսակ</span>   <span class="dataResult" id="typeId"><?php echo $organization['type']; ?></span> <br> <br> 	
         <span style="margin-left:8%">Գործնեության տեսակ մեր դասակարգչով</span>   <span class="dataResult" id="actId"><?php echo $organization['details']; ?></span>   
      </div>
   </div>
</section>
<?php  require_once(SITE_URI . '/template/footer.php');?>	