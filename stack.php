<?php
class stack {

    //初始化資料
    public function __construct()
    {
        $this->stack = array();
        $this->size  = 0;
    }

    /**
     * 進元素
     *
     * @param string $data 元素
     * @return 整個List
     */
    public function push($data) {
        $this->size = $this->size + 1;
        $this->stack[$this->size] = $data;
        return $this->stack;
    }

    /**
     * 移除元素並返回被移除的元素。
     *
     * @return $result 返回被移除的元素
     */
    public function pop()
    {
        if ($this->size == 0) {
            return 'error';
        }
        $result = $this->stack[$this->size];
        unset($result[$this->size-1]);//移除元素
        $this->size = $this->size - 1;
        return $result;
    }

    /**
     * 返回所有元素數量
     *
     * @return void
     */
    public function size()
    {
        return $this->size;
    }
}