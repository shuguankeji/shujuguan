<?php 
  /*
  Template Name: Page Sales
  */
?>
<?php get_header(); ?>

<div class="role text-center">
    <section class="banner">
        <div class="banner-bg banner-bg-above"></div>
        <div class="banner-bg banner-bg-below"></div>
        <div class="banner-content">
            <img class="title" src="<?php echo get_custom('cdn_base') ; ?>/img/roles/title_sales.png">
            <p class="subtitle">作为销售，你需要不停地回答来自各个方面的问题，使用数据观，你可以直接让数据说话，将无效沟通的时间省下来，以数据为基础，去思考如何更好地管理自己的精力。</p>
            <img class="banner-img" src="<?php echo get_custom('cdn_base') ; ?>/img/roles/banner_sales.png">
            <p class="subtitle">这是一个科技公司的销售主管看板。如今，他已经把这个看板变成了自己的“助理”——定期将各处的数据自动整合在一起，几分钟形成表述清晰、形式美观的报告。基于数据掌握现状，上传下达，带领团队更快地将精力集中于关键事项。</p>
        </div>
    </section>

    <section class="role-content">
        <div class="row reverse">
            <div class="content-text">
                <a href="https://www.shujuguan.cn"><h2 class="title">数据观项目报备概况</h2></a>
                <div>
                    <p>
                    四个KPI图反应了本周、本月、本季度和当年的项目报备情况，简单几个数据，却可以迅速了解到销售全局和当前所处地位。
                    </p>
                </div>
            </div>
            <div class="content-img">
                <img class="center-block" src="<?php echo get_custom('cdn_base') ; ?>/img/roles/sales_1.png">
            </div>
        </div>
        <div class="row">
            <div class="content-text">
                 <a href="https://www.shujuguan.cn"><h2 class="title">数据观本周项目报备</h2></a>
                <div>
                    <p>
                    右侧柱图反应了各个产品线的项目本周报备情况，X轴代表报备项目，Y轴代表预计签约额，颜色代表不同产品线。而右侧的条图，则是各个部门签约额的月度、季度、年度排行榜。
                </div>
            </div>
            <div class="content-img">
                <img class="center-block" src="<?php echo get_custom('cdn_base') ; ?>/img/roles/sales_2.png">
            </div>
        </div>
        <div class="row reverse">
            <div class="col-xs-5 content-text">
                <a href="https://www.shujuguan.cn"><h2 class="title">数据观区域&部门项目报备</h2></a>
                <div>
                    <p>
                    左侧地图和条图，分别从项目地域分布和报备部门两个维度反应年度预计签约额的情况。
                    </p>
                </div>
            </div>
            <div class="col-xs-7 content-img">
                <img class="center-block" src="<?php echo get_custom('cdn_base') ; ?>/img/roles/sales_3.png">
            </div>
        </div>
        <a href="https://www.shujuguan.cn">https://www.shujuguan.cn 数据观</a>
    </section>

    <section class="conclusion">
       <div class="container"> 
            <p class="conclusion-text">提起使用感受，这位销售主管说：“现在开会，我只需要打开我的看板，直接汇报就可以了，终于不用熬夜做PPT了。更棒的是，需要切换角度查看数据时，点击几次鼠标就搞定了，不用浪费时间去翻找原始数据和重新做图。”</p>
       </div>
    </section>
</div>

<?php get_footer(); ?>