<?php

class Product{
    private $id;
    private $title;
    private $brand;
    private $description;
    private $img;
    private $priceHT;
    private $tva;
    private $actif;
    private $id_Animal;
    private $id_category;

    /**
     * @param $id
     * @param $title
     * @param $brand
     * @param $description
     * @param $priceHT
     * @param $tva
     * @param $img
     * @param $actif
     * @param $id_Animal
     * @param $id_category
     */
    public function __construct($id, $title, $brand, $description, $img, $priceHT, $tva, $actif, $id_Animal,
                                $id_category)
    {
        $this->id = $id;
        $this->title = $title;
        $this->brand = $brand;
        $this->description = $description;
        $this->img = $img;
        $this->priceHT = $priceHT;
        $this->tva = $tva;
        $this->actif = $actif;
        $this->id_Animal = $id_Animal;
        $this->id_category = $id_category;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img)
    {
        $this->description = $img;
    }

    /**
     * @return mixed
     */
    public function getPriceHT()
    {
        return $this->priceHT;
    }

    /**
     * @param mixed $priceHT
     */
    public function setPriceHT($priceHT)
    {
        $this->priceHT = $priceHT;
    }

    /**
     * @return mixed
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * @param mixed $tva
     */
    public function setTva($tva)
    {
        $this->tva = $tva;
    }

    /**
     * @return mixed
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * @param mixed $actif
     */
    public function setActif($actif)
    {
        $this->actif = $actif;
    }

    /**
     * @return mixed
     */
    public function getIdAnimal()
    {
        return $this->id_Animal;
    }

    /**
     * @param mixed $id_Animal
     */
    public function setIdAnimal($id_Animal)
    {
        $this->id_Animal = $id_Animal;
    }

    /**
     * @return mixed
     */
    public function getIdCategory()
    {
        return $this->id_category;
    }

    /**
     * @param mixed $id_category
     */
    public function setIdCategory($id_category)
    {
        $this->id_category = $id_category;
    }
}


$produits = array(
    array('Id_Produit' => '1','Titre' => 'Mauri','Marque' => '','Description' => 'Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.

Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.

In sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.','PrixHT' => '50.87','TVA' => '0.25','actif' => '','Id_Marques' => '1','Id_Animaux' => '1','Id_Categorie' => '1'),
    array('Id_Produit' => '2','Titre' => 'Curabitur ','Marque' => '','Description' => 'Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.','PrixHT' => '54.00','TVA' => '0.90','actif' => 'disponible','Id_Marques' => '2','Id_Animaux' => '2','Id_Categorie' => '2'),
    array('Id_Produit' => '3','Titre' => 'Suspendisse ','Marque' => '','Description' => 'Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.

Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.','PrixHT' => '7.80','TVA' => '0.82','actif' => 'disponible','Id_Marques' => '3','Id_Animaux' => '3','Id_Categorie' => '3'),
    array('Id_Produit' => '4','Titre' => 'Morbi','Marque' => '','Description' => 'Fusce consequat. Nulla nisl. Nunc nisl.

Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.','PrixHT' => '66.00','TVA' => '0.83','actif' => 'disponible','Id_Marques' => '4','Id_Animaux' => '4','Id_Categorie' => '4'),
    array('Id_Produit' => '5','Titre' => ' odio.','Marque' => '','Description' => 'Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.','PrixHT' => '87.00','TVA' => '0.50','actif' => 'disponible','Id_Marques' => '5','Id_Animaux' => '5','Id_Categorie' => '5'),
    array('Id_Produit' => '6','Titre' => 'Nulla tempus.','Marque' => '','Description' => 'Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.

Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.

Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.','PrixHT' => '12.55','TVA' => '0.99','actif' => '','Id_Marques' => '6','Id_Animaux' => '6','Id_Categorie' => '6'),
    array('Id_Produit' => '7','Titre' => ', diam e','Marque' => '','Description' => 'Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.','PrixHT' => '78.99','TVA' => '0.60','actif' => 'disponible','Id_Marques' => '7','Id_Animaux' => '7','Id_Categorie' => '7'),
    array('Id_Produit' => '8','Titre' => 'Fusce ','Marque' => '','Description' => 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.','PrixHT' => '44.00','TVA' => '0.62','actif' => 'disponible','Id_Marques' => '8','Id_Animaux' => '8','Id_Categorie' => '8'),
    array('Id_Produit' => '9','Titre' => 'Curabitur ','Marque' => '','Description' => 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.

Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.','PrixHT' => '5.00','TVA' => '0.08','actif' => '','Id_Marques' => '9','Id_Animaux' => '9','Id_Categorie' => '9'),
    array('Id_Produit' => '10','Titre' => 'Mauris','Marque' => '','Description' => 'Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.','PrixHT' => '4.00','TVA' => '0.28','actif' => 'disponible','Id_Marques' => '10','Id_Animaux' => '10','Id_Categorie' => '10'),
    array('Id_Produit' => '11','Titre' => 'Curabitur ','Marque' => '','Description' => 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.

Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.','PrixHT' => '5.00','TVA' => '0.08','actif' => '','Id_Marques' => '9','Id_Animaux' => '9','Id_Categorie' => '9'),
    array('Id_Produit' => '12','Titre' => 'Mauris','Marque' => '','Description' => 'Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.','PrixHT' => '4.00','TVA' => '0.28','actif' => 'disponible','Id_Marques' => '10','Id_Animaux' => '10','Id_Categorie' => '10')
);
