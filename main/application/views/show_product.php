<?php $id; ?>
<?php
$this->db->select("*");
$this->db->from("beef_products");
$this->db->where("beef_products.id",$id);
$query = $this->db->get();
$beef = $query->row();
?>

<?php $id_brands = $beef->id_brand; ?>
<?php $id_cat = $beef->id_cat; ?>
<?php $id_subcat = $beef->id_subcat; ?>

<?php
$this->db->select("*");
$this->db->from("brands");
$this->db->where("brands.id_brand",$id_brands);
$query = $this->db->get();
$brand = $query->row();
?>

<?php
$this->db->select("*");
$this->db->from("categories");
$this->db->where("categories.id_cat",$id_cat);
$query = $this->db->get();
$cat = $query->row();
?>

<?php
$this->db->select("*");
$this->db->from("sub_categories");
$this->db->where("sub_categories.id_subcat",$id_subcat);
$query = $this->db->get();
$subcat = $query->row();
?>
