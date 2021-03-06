<?php

namespace SmallRuralDog\Admin\Grid\Concerns;

use SmallRuralDog\Admin\Grid\Table\Attributes;

trait HasGridAttributes
{

    /**
     * @var Attributes
     */
    protected $attributes;


    /**
     * Table 的高度，默认为自动高度。如果 height 为 number 类型，单位 px；如果 height 为 string 类型，则这个高度会设置为 Table 的 style.height 的值，Table 的高度会受控于外部样式。
     * @param string|int $height
     * @return $this
     */
    public function height($height)
    {
        $this->attributes->height = $height;
        return $this;
    }


    /**
     * Table 的最大高度。合法的值为数字或者单位为 px 的高度。
     * @param string|int $maxHeight
     * @return $this
     */
    public function maxHeight($maxHeight)
    {
        $this->attributes->maxHeight = $maxHeight;
        return $this;
    }

    /**
     * 是否为斑马纹 table
     * @param bool $stripe
     * @return $this
     */
    public function stripe($stripe = true)
    {
        $this->attributes->stripe = $stripe;
        return $this;
    }

    /**
     * 是否带有纵向边框
     * @param bool $border
     * @return $this
     */
    public function border($border = true)
    {
        $this->attributes->border = $border;
        return $this;
    }

    /**
     * Table 的尺寸
     * medium / small / mini
     * @param string $size
     * @return $this
     */
    public function size(string $size)
    {
        $this->attributes->size = $size;
        return $this;
    }


    /**
     * 列的宽度是否自撑开
     * @param bool $fit
     * @return $this
     */
    public function fit(bool $fit = true)
    {
        $this->attributes->fit = $fit;
        return $this;
    }


    /**
     * 是否显示表头
     * @param bool $showHeader
     * @return $this
     */
    public function showHeader($showHeader = true)
    {
        $this->attributes->showHeader = $showHeader;
        return $this;
    }


    /**
     * 是否要高亮当前行
     * @param bool $highlightCurrentRow
     * @return $this
     */
    public function highlightCurrentRow($highlightCurrentRow = true)
    {
        $this->attributes->highlightCurrentRow = $highlightCurrentRow;
        return $this;
    }

    /**
     * 空数据时显示的文本内容
     * @param string $emptyText
     * @return $this
     */
    public function emptyText($emptyText)
    {
        $this->attributes->emptyText = $emptyText;
        return $this;
    }

    /**
     * tooltip effect 属性
     * dark/light
     * @param string $tooltipEffect
     * @return $this
     */
    public function tooltipEffect($tooltipEffect)
    {
        $this->attributes->tooltipEffect = $tooltipEffect;
        return $this;
    }

    public function rowKey($rowKey)
    {
        $this->attributes->rowKey = $rowKey;
        return $this;
    }


    /**
     * 开启拖拽排序
     * @param $url
     * @return $this
     */
    public function draggable($url)
    {
        $this->attributes->draggable = true;
        $this->attributes->draggableUrl = $url;
        return $this;
    }
}
