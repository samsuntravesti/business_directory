<?php
 require_once('/home/git/Desktop/businessDirectory/api/config.php');
 require_once('/var/www/html/businessDirectory/api/config.php');
 require_once(SITE_URI . '/header.php');
 require_once(SITE_URI . '/api/functions.php');
 $organization = view();
?>
<section id="single">
   <div class="row" id="firmName"><?php echo $organization['name']; ?></div>
   <div class="row">
      <div class="dataName">
         <h4 class="tvyal">Տվյալներ</h4>
         <span class="klass">ՀՎՀՀ</span> <br>    <span class="dataResult"><?php echo $organization['number']?></span> <br>                 
         <span class="klass">Համայնք</span> <br>	 <span class="dataResult" id="regionId"><?php echo $organization['region']?></span> <br> 
         <span class="klass">Հասցե</span>	<br> <span class="dataResult" id="addressId"><?php echo $organization['address']?></span> <br> 
         <span class="klass">Հեռ․</span>  <br>	<span class="dataResult" id="phoneId"><?php echo $organization['phone']; ?></span> <br> 
         <span class="klass">Ղեկավար</span>  <br>  <span class="dataResult" id="dirId"><?php echo $organization['president']; ?></span> <br> 
         <span class="klass">Էլ․ փոստ</span>  <br>  <span class="dataResult" id="postId"><?php echo $organization['email']; ?></span> <br> 
         <span class="klass">Վեբ֊կայք</span>  <br> <span class="dataResult" id="webId"><a href="<?php echo $organization['website'] ?>"><?php echo $organization['website']; ?></a></span>  <br> 
         <span class="klass">Գործնեություն</span>  <br>  <span class="dataResult" id="activityId"><?php echo $organization['activity']; ?></span> <br> 
         <span class="klass">Կազմակերպաիրավական տեսակ</span>  <br> <span class="dataResult" id="typeId"><?php echo $organization['type']; ?></span> <br> 
         <span class="klass">Գործնեության տեսակ մեր դասակարգչով</span> <br>  <span class="dataResult" id="actId"><?php echo $organization['details']; ?></span>   
      </div>
   </div>
</section>
<?php  require_once(SITE_URI . '/footer.php');?>	
<?php  require_once(SITE_URI . '/footer.php');?>	
