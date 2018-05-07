          <?php
          class Basetut_Salestaff_Block_Adminhtml_Staff_Grid extends Mage_Adminhtml_Block_Widget_Grid
          {
           public function __construct()
           {
           parent::__construct();
           $this->setId('staffGrid');
           $this->setDefaultSort('id');
           $this->setDefaultDir('ASC');
           $this->setSaveParametersInSession(true);
           }
           
           /**
           * lay ra collection can hien thi len grid
           */
           protected function _prepareCollection()
           {
           $collection = Mage::getModel('salestaff/staff')->getCollection();
           $this->setCollection($collection);
           return parent::_prepareCollection();
           }



                     protected function _prepareMassaction() {
                     $this->setMassactionIdField('id');
                     $this->getMassactionBlock()->setFormFieldName('staff');
                     
                    $this->getMassactionBlock()->addItem('delete', array(
                     'label' => Mage::helper('salestaff')->__('Delete'),
                     'url' => $this->getUrl('*/*/massDelete'),
                     'confirm' => Mage::helper('salestaff')->__('Are you sure?')
                     ));
                     
                     return $this;
                     }

           
           /**
           * hàm chuan bi trước khi in ra grid
           */
           protected function _prepareColumns()
           {
           $this->addColumn('id', array(
           'header' => Mage::helper('salestaff')->__('ID'),
           'align' =>'right',
           'width' => '50px',
           'index' => 'id',
           ));
           
          $this->addColumn('name', array(
           'header' => Mage::helper('salestaff')->__('Name'),
           'align' =>'left',
           'index' => 'name',
           ));
           
          $this->addColumn('email', array(
           'header' => Mage::helper('salestaff')->__('Email'),
           // 'width' => '150px',
           'index' => 'email',
           'type' => 'text'
           ));
           
           $this->addColumn('phone', array(
           'header' => Mage::helper('salestaff')->__('Phone'),
           'align' => 'left',
           'width' => '150px',
           'index' => 'phone',
           'type' => 'text'

           ));
           
          $this->addColumn('company', array(
           'header' => Mage::helper('salestaff')->__('Company'),
           'align' => 'left',
           'index' => 'company',
           'type' => 'text'

           ));

          $this->addColumn('message', array(
           'header' => Mage::helper('salestaff')->__('Message'),
           'index' => 'message',
           'type' => 'text'
           ));

          $this->addColumn('action',
          			array(
                    		'header' => Mage::helper('salestaff')->__('Action'),
                    		'width' => '100',
                    		'type' => 'action',
                    		'getter' => 'getId',
                    		'actions' => array(
                          array(
                                'caption' => Mage::helper('salestaff')->__('View'),
                                'url' => array('base'=> '*/*/edit'),
                                'field' => 'id'
                          )),
                    		'filter' => false,
                    		'sortable' => false,
                    		'index' => 'stores',
                    		'is_system' => true,
          			));
           
                  $this->addExportType('*/*/exportCsv', Mage::helper('salestaff')->__('CSV'));
                $this->addExportType('*/*/exportXml', Mage::helper('salestaff')->__('XML'));
                return parent::_prepareColumns();
           }
           

           public function getRowUrl($row)
          {
           return $this->getUrl('*/*/edit', array('id' => $row->getId()));
          }
          }