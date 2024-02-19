<?php
        class Home extends Controllers{
            public function __construct()
            {
                parent::__construct();
            }
            public function home(){
                $data['page_id']=1;
                $data['page_tag']="Home";
                $data['page_title']="Página Principal";
                $data['page_name']="home";
                $data['page_content']="  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus omnis fuga voluptatum ratione nesciunt rerum voluptatem placeat sit suscipit optio atque maiores iusto autem praesentium vel, ipsam quo soluta facilis?";

                $this->views->getView($this,"home",$data);
            }
            

           
        }
?>