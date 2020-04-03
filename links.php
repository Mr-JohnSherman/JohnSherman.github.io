<html>
<head>
<style>
article ul li {
    transition: all .03s;
    width: calc(12.5% - 10px);
    margin: 5px;
    border-radius: 4px;
    border: 1px solid #eee;

    overflow: hidden;
}
.link-p {
 top: 10px;
    font-size: 15px;
    color: #606266;
    -webkit-transition: none;
    transition: none;
 margin-bottom: 5px;
    display: block;
    position: relative;
    width: 100%;
    border: none;
height:30px;
    margin-top: -2px;
    text-align: center;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

article ul {
    list-style-type: none;
    padding: 0;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    margin: -5px;
}

article ul li img {
  height:110px;
    width: 100%;
    border-radius: 0;
    border: none;
    display: block;
}
@media screen and (max-width: 768px) {
article ul li {
    width: calc(33.3333333333% - 10px);
}
</style>
</head>
<?php 
/**
 * ��������
 * 
 * @package custom 
 * 
 */
 if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('head.php');
?>
<body>
    <div id="header">
        <?php $this->need('header.php'); ?>
    </div>
    <div id="content">

        <article class="container">
            <?php
            $str = preg_replace('#<li>(.*?)</li>#','<li>$1</li>', $this->content);
            $str = preg_replace('#<li>(.*?)<a href="(.*?)">(.*?)</a></li>#','<a class="btn btn-raised" href="$2" target="_blank" >$1<p>$3</p></a>',$str);
            $str = preg_replace('#<ul>#','<div class="link-area">', $str);
            $str = preg_replace('#</ul>#','</div>', $str);
            $str = preg_replace('#\@\((.*?)\)#','<img src="/usr/themes/catui/newpaopao/$1.png" class="biaoqing">',$str);
            echo $str;
            ?>
        </article>

        <div class="others container">
            <!--  ���±�ǩ  -->
            <div class="tags"><?php $this->tags(' ', true); ?></div>
            <!--  ���¹��ܰ�ť  -->
            <?php if (!empty($this->options->OtherTool) && in_array('share', $this->options->OtherTool)): ?>
            <div class="share"> <a tooltip="����������" id="support-b" style="background: rgb(254, 212, 102);width: inherit;padding: 0 8px;"><i class="fa fa-usd"></i> ����</a>
                <a tooltip="��ʾ�����µĶ�ά��" id="qrcode-b" style="background: rgb(117, 117, 117);width: inherit;padding: 0 8px;"><i class="fa fa-qrcode"></i> ��ά��</a>
                <a tooltip="�����QQ����" style="background: #72afeb;" href="http://connect.qq.com/widget/shareqq/index.html?url=<?php $this->permalink() ?>&amp;desc=<?php $this->title(); ?>&amp;pics=<?php echo img_postthumb($this->cid,$this->fields->Cover); ?>&amp;site=qqcom" target="_blank"><i class="fa fa-qq"></i></a>
                <a tooltip="��������΢��" style="background: #ff6e71;" href="http://service.weibo.com/share/share.php?title=<?php $this->title(); ?>&amp;url=<?php $this->permalink() ?>&amp;pic=<?php echo img_postthumb($this->cid,$this->fields->Cover); ?>" target="_blank"><i class="fa fa-weibo"></i></a>
                <a tooltip="����QQ�ռ�" style="background: #ffcd00;" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php $this->permalink() ?>&amp;title=<?php $this->title(); ?>&amp;pics=<?php echo img_postthumb($this->cid,$this->fields->Cover); ?>" target="_blank"><i class="fa fa-star"></i></a>
            </div>
            <?php endif;?>
        </div>

        <!--  ԭ�����±���  -->
        <?php if (!empty($this->options->OtherTool) && in_array('copyright', $this->options->OtherTool)): ?>
        <div class="cc">ԭ�����²���<a href="https://creativecommons.org/licenses/by-nc-sa/4.0/deed.zh" tooltip="CC BY-NC-SA 4.0Э��" target="_new"> CC BY-NC-SA 4.0Э�� </a>������ɣ�ת��������ת�ԣ�
            <a href="<?php $this->permalink() ?>" target="_new" tooltip="<?php $this->title() ?>"><?php $this->title() ?></a>
        </div>
        <?php endif;?>

    </div>
    <div id="comments">
        <?php $this->need('comments.php'); ?>
    </div>
    <div id="footer">
        <?php $this->need('footer.php'); ?>
    </div>
</body>
</html>