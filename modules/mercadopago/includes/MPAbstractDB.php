<?php
/**
 * 2007-2015 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    MERCADOPAGO.COM REPRESENTA&Ccedil;&Otilde;ES LTDA.
 * @copyright Copyright (c) MercadoPago [http://www.mercadopago.com]
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 *          International Registered Trademark & Property of MercadoPago
 */

abstract class MPAbstractDB
{
    protected $table;
    protected $where;
    protected $orderBy;
    protected $andWhere;

    /**
     * Execute query for database without return
     *
     * @param [string] $query
     * @return void
     */
    public function executeQuery($query)
    {
        if (Db::getInstance()->execute($query) == false) {
            return false;
        }
        return true;
    }

    /**
     * Execute query for database with return
     *
     * @param [string] $query
     * @return void
     */
    public function selectQuery($query)
    {
        $sql = Db::getInstance()->getRow($query);
        return $sql;
    }

    /**
     * Get method
     */
    public function get()
    {
        $query = "SELECT * FROM $this->table $this->where $this->orderBy";
        $result = $this->selectQuery($query);
        return $result;
    }

    /**
     * Count method, needs where() method
     *
     * @return void
     */
    public function count()
    {
        $query = "SELECT COUNT(*) AS count FROM $this->table $this->where $this->andWhere";
        $result = $this->selectQuery($query);
        return $result['count'];
    }

    /**
     * Where method, needs be called with count() or get()
     *
     * @param [string] $column
     * @param [mixed] $operator
     * @param [mixed] $value
     * @return void
     */
    public function where($column, $operator, $value)
    {
        $this->where = 'WHERE ' . $column . ' ' . $operator . ' "' . $value . '"';
        return $this;
    }

    /**
     * And where method, needs be called with count() or get()
     *
     * @param [string] $column
     * @param [mixed] $operator
     * @param [mixed] $value
     * @return void
     */
    public function andWhere($column, $operator, $value)
    {
        $this->andWhere = 'AND ' . $column . ' ' . $operator . ' "' . $value . '"';
        return $this;
    }

    /**
     * orderBy method, needs be called with get()
     *
     * @param [string] $column
     * @param [mixed] $operator
     * @return void
     */
    public function orderBy($column, $operator)
    {
        $this->orderBy = 'ORDER BY ' . $column . ' ' . $operator;
        return $this;
    }

    /**
     * Insert data in database
     *
     * @param [type] $array
     * @return void
     */
    public function create($array)
    {
        if (gettype($array) == "array") {
            $attrs  = "";
            $params = "";

            foreach ($array as $attr => $param) {
                $attrs  .= $attr . ",";
                $params .= "'" . $param . "',";
            }

            $attrs .= "created_at";
            $params .= "'" . date("Y-m-d H:i:s") . "'";

            $query = "INSERT INTO $this->table ($attrs) VALUES ($params)";
            $result = $this->executeQuery($query);
            
            return $result;
        }

        return false;
    }

    /**
     * Update data in database
     *
     * @param [type] $array
     * @return void
     */
    public function update($array)
    {
        if (gettype($array) == "array") {
            $update = "";

            foreach ($array as $attr => $param) {
                $update .= $attr . " = '" . $param . "',";
            }

            $update .= "updated_at = '" . date("Y-m-d H:i:s") . "'";
            $query  = "UPDATE $this->table SET $update $this->where";
            $result = $this->executeQuery($query);

            return $result;
        }

        return false;
    }
}
