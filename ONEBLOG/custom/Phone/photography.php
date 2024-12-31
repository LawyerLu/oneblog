<?php $this->need('custom/Phone/post_header.php');?>
<?php $this->need('custom/Phone/nav.php');?>
<div class="main">
    <div class="content no_thumb">
        <div class="top-menu">
            <div id="sidebarToggler" class="nav"><i class="iconfont icon-nav"></i></div>
            <div class="top-sitename"><img src="<?php $this->options->Mlogo();?>"></div>
        </div>
        <div class="post photography">
            
            <div class="post_category">
                <?php $this->category(','); ?>
            </div>
            
            <div class="post_title">
                <h2><a href="<?php $this->permalink() ?>" ><?php if (isset($this->fields->title)): ?><?php  $this->fields->title();?><?php else: ?><?php $this->title();?><?php endif; ?></a>
                </h2>   
                <span class="post_date"><?php $this->dateWord(); ?></span>
                <span class="post_views"><?php get_post_view($this) ?>&nbsp;阅读</span>
                <span class="post_comment"><?php $this->commentsNum('0 评论', '1 评论', '%d 评论'); ?></span>
            </div>
            
            <div class="post_content">
                <?php $this->content(); ?>  
                <a data-fancybox="gallery" data-caption="<?php $this->title();?>&nbsp;&nbsp;&nbsp;&nbsp;<?php $this->date('M d, Y'); ?>&nbsp;&nbsp;&nbsp;&nbsp;© <?php $this->options->title();?> 版权所有"  href="<?php $this->fields->photo();?>"><img src="<?php $this->fields->thumb();?>" /></a>
            </div>
            <div class="cc-say">
                本摄影作品著作权归作者 [&nbsp;<span><?php $this->fields->author();?></span>&nbsp;] 享有，未经作者书面授权，禁止以任何目的、任何形式转载，本声明具有法律效力，作者保留法律范围内的一切权利。
            </div>  
            <div class="post_footer">
                <div class="tags">
                    <?php $this->tags(' ', true, ''); ?>
                </div>
                
            <?php $this->related(5)->to($relatedPosts); ?>
            <div class="relation">
                <?php $justone = 1; ?>
                <?php while ($relatedPosts->next()):
                if ($justone == 1) { //循环中该文本只执行一次
                    $justone = 2;?>
                    <div class="youlike"><span>▋ 猜你喜欢</span></div>
                <?php } ?>
                <div class="relate-post" style="background-image:url('<?php $relatedPosts->fields->thumb();?>')">
                    <a href="<?php $relatedPosts->permalink(); ?>"  title="<?php $relatedPosts->title(); ?>">
                        <h2 class="prev-title"><?php $relatedPosts->title(); ?></h2>
                    </a> 
                </div>
                <?php endwhile; ?>
            </div>
            </div>
            <?php $this->need('comments.php'); ?> 
        </div>
    </div>
</div>
<?php $this->need('footer.php'); ?>