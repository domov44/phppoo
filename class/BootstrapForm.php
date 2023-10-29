<?php 
class BootstrapForm extends Form{
    protected function surround ($html){
        return "<div class=\"form-group\">$html</div>";
    }

    public function input($name){
        return $this->surround(
            '<label>' . $name . '</label><input type ="text" name ="' . $name . '" placeholder ="' . $name . '" value="'. $this->getValue($name) . '"class="form-control">'
     );
     }

     public function submit(){
        return $this->surround('<button class="btn btn-primary "type ="submit">Envoyer</button>');
     }
}