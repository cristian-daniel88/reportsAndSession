
$.ajax({
    url: "libs/php/report.php",
    type: "POST",
    dataType: "json",
    data: {
      custPoNumber:'jdjdj', 
      gbePoNumber: 'jdjdjd', 
      partNumber: 'jsjsjs', 
      serialNumRange:'jdjdjd', 
      serialNumStart: 'jsjsjsjs', 
      serialNumEnd: 'jdjdjdjd', 
      date: '2013-03-15', 
      workmanshipQual: 'PASS', 
      tested: 'PASS',
      customerId: 1, 
      orderQty: 1, 
      declaredQty: 1, 
      unitsInspected: 1, 
      builtById: 1,
      operator1Id: 1, 
      operator2Id: 1, 
      operator3Id: 1, 
      operator4Id: 1, 
      qcInspectorId: 1, 
      approvedById: 1, 
      packedById: 1, 
      checkedById: 1, 
      passLabelChk: 1, 
      orderNumChk: 1, 
      quantityChk: 0, 
      productDetailsChk: 0, 
      kitSuppliedChk: 1
    },
    success: function name(params) {console.log(params)}
       
  })
  
  
  