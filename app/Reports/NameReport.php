<?php
declare(strict_types=1);
namespace App\Reports;

use agoalofalife\Reports\Contracts\HandlerReport;
use agoalofalife\Reports\Report;

class NameReport extends Report implements HandlerReport
{
    /**
     * Disk for filesystem
     * @var string
     */
    public $disk = 'public';

  /**
     * Extension export : xls, xlsx, pdf, csv
     * @var string
     */
    public $extension = 'xlsx';

     /**
     * Get file name
     * @return string
     */
    public function getFilename() : string
    {
        return '';
    }

    /**
     * Get title report
     * @return string
     */
    public function getTitle() : string
    {
        return '';
    }

    /**
     * Get description report
     * @return string
     */
    public function getDescription() : string
    {
        return '';
    }
    /**
     * @param $excel
     * @return bool
     */
    public function handler($excel) : bool
    {
        // TODO: Implement handler() method.
    }
}
