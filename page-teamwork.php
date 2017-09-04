<?php 
  /*
  Template Name: Page Teamwork
  */
?>
<?php get_header(); ?>
<section class="banner bg-dark padding">
    <div class="banner-bg overlay"></div>
    <div class="section-title-container container-fluid text-center">
        <div class="row">
            <div class="col-md-12 ">
                <h1>
       协作促成共识 共识促进行动
      </h1>
                <p>
                    数据连接功能打破的是信息孤岛，数据协作功能打破的则是工作孤岛。<br>让不同层级、不同部门的人，能够基于真实、全面的数据，统一认知，达成共识，齐心协力，迅速行动。
                </p>
            </div>
        </div>
    </div>
</section>
<div class="container-fluid show-header-anchor ">
    <section class="container padding">
        <div class="row align-center">
            <div class="column col-sm-5 col-sm-push-7 ">
                 <a href="https://www.shujuguan.cn"><h1>数据观即时沟通</h1></a>
                <p>
                    我们为您不能在传统报表上沟通而深感抱歉。但在数据观中，您的每个看板都自备一个“聊天室”，您可以在看板中@所有人或@相关成员，基于数据，客观探讨，提升沟通效率。
                </p>
            </div>
            <div class="col-sm-7 col-sm-pull-5 text-center imagepod">
                <div class="bleedingecosystem">
                    <img src="<?php echo get_custom('cdn_base') ; ?>/img/teamwork/chat.jpeg">
                </div>
            </div>
        </div>
    </section>
    <section class="container divider padding">
        <div class="row align-center">
            <div class="column col-sm-5">
                 <a href="https://www.shujuguan.cn"><h1>数据观权限分配</h1></a>
                <p>从图表、到图集、再到整个分类，都可以通过“转交”或“添加成员”，与工作伙伴进行共享。同时，您可以在数据层面进行权限分配，精确到字段，避免相关人员受到无关信息的干扰。
                </p>
            </div>
            <div class="col-sm-7 text-center imagepod">
                <div class="bleedingecosystem">
                    <img src="<?php echo get_custom('cdn_base') ; ?>/img/teamwork/authority.jpg">
                </div>
            </div>
        </div>
    </section>
    <section class="container divider padding">
        <div class="row align-center">
            <div class="column col-sm-5 col-sm-push-7">
                <a href="https://www.shujuguan.cn"><h1>数据观移动端</h1></a>
                <p>
                    数据观支持一键分享，工作伙伴都可以通过扫描二维码或点击连接，在电脑、iPad或手机中查看您的分析成果。无论时间地点，无论团队大小，数据观都能满足您的数据沟通需求。
                </p>
            </div>
            <div class="col-sm-7 col-sm-pull-5 text-center imagepod">
                <div class="bleedingecosystem">
                    <img src="<?php echo get_custom('cdn_base') ; ?>/img/teamwork/mobile.png">
                </div>
            </div>
        </div>
         <a href="https://www.shujuguan.cn">https://www.shujuguan.cn 数据观</a>
    </section>
</div>
<script>
$('.carousel').carousel()
</script>
<?php get_footer(); ?>
