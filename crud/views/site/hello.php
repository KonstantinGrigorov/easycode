

<h1><?php echo $varInView;?></h1>


    
    <?php foreach ($arrayInView as $item):?> 

        <div class="row">
            <div class = "col-xs-6 col-sm-4">
                <div class="thumbnail">
                    <img src='http://placehold.it/400x240' alt=''>
                            <div class="caption">
                                <h3><a href="/my/easycode/crud/site/view/<?=$item->id;?>"><?php echo $item->title;?></a></h3>
                                    
                        <a href="/my/easycode/crud/site/view/<?=$item->id;?>" class="btn btn-success">Подробнее<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>

                </div>
            </div> 
        </div>
        
    <?php endforeach; ?>
    
    <!-- <p>This is the Hello page.   </p> -->
    <script src="https://use.fontawesome.com/b1c7af88f3.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
 
    
