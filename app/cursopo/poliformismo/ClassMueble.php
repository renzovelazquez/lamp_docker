<?php
    require_once("ClassProducto.php");

    class Mueble extends Producto
    {
        public $strColor;
        public $strMaterial;
        public $strStatus = "Agotado";

        public function __construct(string $descripcion, float $precio, string $marca, string $color, string $material)
        {
            parent::__construct($descripcion, $precio);

            $this->strMaterial = $material;
            $this->strColor = $color;
        }


        public function getInfoProducto()
        {
            $arrProducto = array('producto' => $this->strDescripcion,
                                'precio' => $this->fltPrecio,
                                'stock_minimo'  =>  $this->intStockMinimo,
                                'estado' => $this->strStatus,
                                'Material' => $this->strMaterial,
                                'color' => $this->strColor
                            );
            return $arrProducto;
        }

    }