<?php get_header(); ?>



<div id="ttr_main" class="row">
<div id="ttr_content" class="col-lg-10 col-sm-10 col-md-10 col-xs-10">

<div class="row">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="col-lg-4 col-sm-4 col-md-4 col-xs-4 py-5">
<!-- <img src="wp-content/uploads/2024/09/img1.jpg" width="100%" height="100%" alt="tree"> -->
    <?php
        $path = "wp-content/themes/mytheme/images/";  
        $image = "arsenal.jpg";
    ?>  
    <div class="card" style="width: 18rem;">
        <img src="<?php echo $path.$image;?>" class="card-img-top mt-4" alt="...">
        <div class="card-body">
            <p class="card-text">
                <b><?php echo('Arsenal Home Jersey') ?></b><br>
                <b>Posted on <?php the_time('F jS, Y') ?></b><br>
                <?php echo('Home jersey of Arsenal Football Club for the season 2022-23 ') ?>
            </p>
        </div>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Read More
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Jersey Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                Standard fit, 100% Polyester, Machine-wash
                Official FIFA Match Grade Jersey , imported from and made in Thailand 🇹🇭 ✈️
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Size</th>
                                <th>Height</th>
                                <th>Width</th>
                            </tr>
                            <tr>
                                <td>M (Medium)</td>
                                <td>28 inches</td>
                                <td>38 inches</td>
                            </tr>
                            <tr>
                                <td>L (Large)</td>
                                <td>29 inches</td>
                                <td>40 inches</td>
                            </tr>
                            <tr>
                                <td>XL (Extra Large)</td>
                                <td>30 inches</td>
                                <td>42 inches</td>
                            </tr>
                            <tr>
                                <td>XXL (Double Extra Large)</td>
                                <td>31 inches</td>
                                <td>44 inches</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Order Now!</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->


<div class="col-lg-4 col-sm-4 col-md-4 col-xs-4 py-5">
<!-- <img src="wp-content/uploads/2024/09/img1.jpg" width="100%" height="100%" alt="tree"> -->
    <?php
        $path = "wp-content/themes/mytheme/images/";  
        $image = "madrid.jpg";
    ?>  
    <div class="card" style="width: 18rem;">
        <img src="<?php echo $path.$image;?>" class="card-img-top mt-4" alt="...">
        <div class="card-body">
            <p class="card-text">
                <b><?php echo('Red Madrid Home Jersey') ?></b><br>
                <b>Posted on <?php the_time('F jS, Y') ?></b><br>
                <?php echo('Home jersey of Real Madrid for the season 2022-23') ?>
            </p>
        </div>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Read More
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Jersey Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                Standard fit, 100% Polyester, Machine-wash
                Official FIFA Match Grade Jersey , imported from and made in Thailand 🇹🇭 ✈️
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Size</th>
                                <th>Height</th>
                                <th>Width</th>
                            </tr>
                            <tr>
                                <td>M (Medium)</td>
                                <td>28 inches</td>
                                <td>38 inches</td>
                            </tr>
                            <tr>
                                <td>L (Large)</td>
                                <td>29 inches</td>
                                <td>40 inches</td>
                            </tr>
                            <tr>
                                <td>XL (Extra Large)</td>
                                <td>30 inches</td>
                                <td>42 inches</td>
                            </tr>
                            <tr>
                                <td>XXL (Double Extra Large)</td>
                                <td>31 inches</td>
                                <td>44 inches</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Order Now!</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>

<div class="col-lg-4 col-sm-4 col-md-4 col-xs-4 py-5">
<!-- <img src="wp-content/uploads/2024/09/img1.jpg" width="100%" height="100%" alt="tree"> -->
    <?php
        $path = "wp-content/themes/mytheme/images/";  
        $image = "jersey.jpg";
    ?>  
    <div class="card" style="width: 18rem;">
        <img src="<?php echo $path.$image;?>" class="card-img-top mt-4" alt="...">
        <div class="card-body">
            <p class="card-text">
                <b><?php echo('Barcelona Home Jersey') ?></b><br>
                <b>Posted on <?php the_time('F jS, Y') ?></b><br>
                <?php echo('Home jersey of Barcelona Football Club for the season 2022-23') ?>
            </p>
        </div>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Read More
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Jersey Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                Standard fit, 100% Polyester, Machine-wash
                Official FIFA Match Grade Jersey , imported from and made in Thailand 🇹🇭 ✈️
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Size</th>
                                <th>Height</th>
                                <th>Width</th>
                            </tr>
                            <tr>
                                <td>M (Medium)</td>
                                <td>28 inches</td>
                                <td>38 inches</td>
                            </tr>
                            <tr>
                                <td>L (Large)</td>
                                <td>29 inches</td>
                                <td>40 inches</td>
                            </tr>
                            <tr>
                                <td>XL (Extra Large)</td>
                                <td>30 inches</td>
                                <td>42 inches</td>
                            </tr>
                            <tr>
                                <td>XXL (Double Extra Large)</td>
                                <td>31 inches</td>
                                <td>44 inches</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Order Now!</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-4 col-sm-4 col-md-4 col-xs-4 py-3">
<!-- <img src="wp-content/uploads/2024/09/img1.jpg" width="100%" height="100%" alt="tree"> -->
    <?php
        $path = "wp-content/themes/mytheme/images/";  
        $image = "bangladesh.jpg";
    ?>  
    <div class="card" style="width: 18rem;">
        <img src="<?php echo $path.$image;?>" class="card-img-top mt-4" alt="...">
        <div class="card-body">
            <p class="card-text">
                <b><?php echo('Bangladesh Home Jersey') ?></b><br>
                <b>Posted on <?php the_time('F jS, Y') ?></b><br>
                <?php echo('Home jersey of Bangladesh Football for the season 2022-23') ?>
            </p>
        </div>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Read More
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Jersey Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                Standard fit, 100% Polyester, Machine-wash
                Official FIFA Match Grade Jersey , imported from and made in Thailand 🇹🇭 ✈️
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Size</th>
                                <th>Height</th>
                                <th>Width</th>
                            </tr>
                            <tr>
                                <td>M (Medium)</td>
                                <td>28 inches</td>
                                <td>38 inches</td>
                            </tr>
                            <tr>
                                <td>L (Large)</td>
                                <td>29 inches</td>
                                <td>40 inches</td>
                            </tr>
                            <tr>
                                <td>XL (Extra Large)</td>
                                <td>30 inches</td>
                                <td>42 inches</td>
                            </tr>
                            <tr>
                                <td>XXL (Double Extra Large)</td>
                                <td>31 inches</td>
                                <td>44 inches</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Order Now!</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-4 col-sm-4 col-md-4 col-xs-4 py-3">
<!-- <img src="wp-content/uploads/2024/09/img1.jpg" width="100%" height="100%" alt="tree"> -->
    <?php
        $path = "wp-content/themes/mytheme/images/";  
        $image = "nassar.jpg";
    ?>  
    <div class="card" style="width: 18rem;">
        <img src="<?php echo $path.$image;?>" class="card-img-top mt-4" alt="...">
        <div class="card-body">
            <p class="card-text">
                <b><?php echo('Al Nassr Home Jersey') ?></b><br>
                <b>Posted on <?php the_time('F jS, Y') ?></b><br>
                <?php echo('Home jersey of Al Nassr for the season 2022-23') ?>
            </p>
        </div>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Read More
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Jersey Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                Standard fit, 100% Polyester, Machine-wash
                Official FIFA Match Grade Jersey , imported from and made in Thailand 🇹🇭 ✈️
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Size</th>
                                <th>Height</th>
                                <th>Width</th>
                            </tr>
                            <tr>
                                <td>M (Medium)</td>
                                <td>28 inches</td>
                                <td>38 inches</td>
                            </tr>
                            <tr>
                                <td>L (Large)</td>
                                <td>29 inches</td>
                                <td>40 inches</td>
                            </tr>
                            <tr>
                                <td>XL (Extra Large)</td>
                                <td>30 inches</td>
                                <td>42 inches</td>
                            </tr>
                            <tr>
                                <td>XXL (Double Extra Large)</td>
                                <td>31 inches</td>
                                <td>44 inches</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Order Now!</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-4 col-sm-4 col-md-4 col-xs-4 py-3">
<!-- <img src="wp-content/uploads/2024/09/img1.jpg" width="100%" height="100%" alt="tree"> -->
    <?php
        $path = "wp-content/themes/mytheme/images/";  
        $image = "miami.jpg";
    ?>  
    <div class="card" style="width: 18rem;">
        <img src="<?php echo $path.$image;?>" class="card-img-top mt-4" alt="...">
        <div class="card-body">
            <p class="card-text">
                <b><?php echo('Inter Miami Home Jersey') ?></b><br>
                <b>Posted on <?php the_time('F jS, Y') ?></b><br>
                <?php echo('Home jersey of Inter Miami for the season 2022-23') ?>
            </p>
        </div>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Read More
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Jersey Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                Standard fit, 100% Polyester, Machine-wash
                Official FIFA Match Grade Jersey , imported from and made in Thailand 🇹🇭 ✈️
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Size</th>
                                <th>Height</th>
                                <th>Width</th>
                            </tr>
                            <tr>
                                <td>M (Medium)</td>
                                <td>28 inches</td>
                                <td>38 inches</td>
                            </tr>
                            <tr>
                                <td>L (Large)</td>
                                <td>29 inches</td>
                                <td>40 inches</td>
                            </tr>
                            <tr>
                                <td>XL (Extra Large)</td>
                                <td>30 inches</td>
                                <td>42 inches</td>
                            </tr>
                            <tr>
                                <td>XXL (Double Extra Large)</td>
                                <td>31 inches</td>
                                <td>44 inches</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Order Now!</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>

</div>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>