<?php

/**
 * Created by PhpStorm.
 * User: otis
 * Date: 16.06.17
 * Time: 0:02
 */
class IndexPage extends Page
{
    public function getContent()
    {
        echo "<div id='main' class='dz11-content'>
                <div ></div>
                <div class='dz11-content-main'>
                
                ";
                $this->_renderArticleList();
        echo " 
                </div>
                <div></div>
              </div>
              <div class='hideZZZ'></div>";
    }

    protected function _renderArticleList(){
        $articles = OneArticle::getAll();
        if (empty($articles)) {
            echo "Статей нет";
            return;
        }
        $colors = ["#5997CA"];

        foreach ($articles as $article) {
            $href = 'article.php?file='.$article->articleFile.'">'.$article->title;
            $color = [rand(0,255), rand(0,255), rand(0,255)];
            echo '<div class="dz11-content-item" onclick="">
                    <div>
                        <div style="background-color: rgb('.$color[0].','.$color[1].','.$color[2].')" class="dz11-content-item-autor">'.substr($article->autor, 1, 1).'</div>
                        <div class="dz11-content-item-autor-name">'.$article->autor.'</div>
                    </div>
                    <div class="dz11-content-item-right">
                        <a class="dz11-content-item-title" href="article.php?file=', $article->articleFile, '">', $article->title , "</a>
                        <div class=\"dz11-content-item-date\">$article->date</div>
                    </div>
                  </div>";
        }

    }
}
