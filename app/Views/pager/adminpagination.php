								<?php $pager->setSurroundCount(2); ?>

								<ul class="pagination pull-right no-margin">
									<?php if ($pager->hasPrevious()): ?>

									        <li class="prev">
            <a href="<?php echo  $pager->getFirst(); ?>">
          <i class="ace-icon fa fa-angle-double-left"></i>
            </a>
        </li>

												<li class="prev">
										<a href="<?php echo  $pager->getPrevious(); ?>">
														<i class="ace-icon fa fa-angle-double-left"></i>
													</a>
												</li>

												<?php endif ?>

<?php foreach ($pager-> links () as $link):?>
												<li <?php  if($link['active']){  ?> class ="active" <?php } ?> >
													<a href="<?php  echo $link['uri']; ?>"><?php echo $link['title']; ?></a>
												</li>

<?php endforeach?>

                                     <?php if($pager->hasNext()):
                                      ?>
												<li class="next">
													<a href="<?php echo $pager->getNext(); ?>">
													<i class="icon-double-angle-right">
														<i class="ace-icon fa fa-angle-double-right"></i>
													</a>
												</li>

														<li class="next">
													<a href="<?php echo $pager->getLast(); ?>">
													<i class="icon-double-angle-right">
														<i class="ace-icon fa fa-angle-double-right"></i>
													</a>
												</li>


											<?php endif ?>

											</ul>