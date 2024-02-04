<?php
require_once("../../App/config.php");


$NumViews=getSession('post')['number_of_views'];
if(getUser('user')['role']=='admin'||getUser('user')['id']==getSession('post')['user_id'])
{
removeSession('post');
}
else
{
    $NumViews+=1;
    dbUpdate('articles',['number_of_views'=>$NumViews],getSession('post')['id'])   ;
}
