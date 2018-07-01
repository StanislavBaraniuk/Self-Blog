<?php

/**
 * Created by PhpStorm.
 * User: otis
 * Date: 15.06.17
 * Time: 23:55
 */
class Page
{

    protected function _renderHeader(){
        $_SESSION['login'] = "Stanislav";
        $len = (iconv_strlen($_SESSION["login"])+10) * 10;
        echo "<div class='dz11-header'>
                
                <style>
      
                    .dz11-header-wrapper {
                        display: grid;
                        grid-template-columns: 0.76fr {$len}px 1fr 0.2fr 0.7fr;
                        
                    }
            
                </style>  
                <div class='dz11-header-wrapper'>
                    <div></div>
                    <div>
                        <h2>{$_SESSION['login']}'s blog</h2>
                    </div>
                    <div></div>
                    <div class='fas fa-user-circle dz11-header-account'></div>
                    <div></div>
                </div>
              </div>";
    }
    protected function _renderFooter(){
        echo "<div id='footer' class='dz11-footer'>
              </div>";
    }
    protected function _renderContent() {
        echo "<div>
                    {$this->getContent()}
              </div>";
    }

    public function render(){
        $this->_renderHeader();
        $this->_renderContent();
        $this->_renderFooter();
    }

}