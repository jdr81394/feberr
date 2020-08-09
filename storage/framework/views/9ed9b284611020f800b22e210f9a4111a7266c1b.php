<?php if($user['user']->user_type == 'vendor'): ?>
<div class="col-md-4 col-sm-4">
                            <div class="author-info mcolorbg4">
                                <p><?php echo e(Helper::translation(3195,$translate)); ?></p>
                                <h3><?php echo e($getitemcount); ?></h3>
                            </div>
                        </div>
                        <!-- end /.col-md-4 -->

                        <div class="col-md-4 col-sm-4">
                            <div class="author-info pcolorbg">
                                <p><?php echo e(Helper::translation(3039,$translate)); ?></p>
                                <h3><?php echo e($getsalecount); ?></h3>
                            </div>
                        </div>
                        <!-- end /.col-md-4 -->

                        <div class="col-md-4 col-sm-4">
                            <div class="author-info scolorbg">
                                <p><?php echo e(Helper::translation(3196,$translate)); ?></p>
                                <div class="rating product--rating">
                                    <ul>
                                        <?php if($count_rating == 0): ?>
                                        <li>
                                            <span class="fa fa-star-o"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-o"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-o"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-o"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-o"></span>
                                        </li>
                                        <?php endif; ?>
                                        <?php if($count_rating == 1): ?>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-o"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-o"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-o"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-o"></span>
                                        </li>
                                        <?php endif; ?>
                                        <?php if($count_rating == 2): ?>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-o"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-o"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-o"></span>
                                        </li>
                                        <?php endif; ?>
                                        <?php if($count_rating == 3): ?>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-o"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-o"></span>
                                        </li>
                                        <?php endif; ?>
                                        <?php if($count_rating == 4): ?>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star-o"></span>
                                        </li>
                                        <?php endif; ?>
                                        <?php if($count_rating == 5): ?>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <?php endif; ?>
                                    </ul>
                                    <span class="rating__count">(<?php echo e($getreview); ?>)</span>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?><?php /**PATH D:\xampp\htdocs\feberr\resources\views/user-box.blade.php ENDPATH**/ ?>