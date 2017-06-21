<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html> 
<body style="font-family: 'arial';text-align: center;">
  <h2>My CD Collection</h2>
  <table border="1" style="width: 500px;border-collapse: collapse;" align="center">
    <tr bgcolor="#9acd32">
      <th style="text-align:left;padding: 5px;">Artist</th>
      <th style="text-align:left;">Tours</th> 
    </tr>
    <xsl:for-each select="catalog/cd">
          <xsl:if test="count(tours) > 0 and price > 10.85">
            <tr>
            <td><xsl:value-of select="artist/name"/></td>  
            <td style="padding: 5px;">
              <table style="width: 300px; text-align:left;border-collapse: collapse;">  
                <xsl:for-each select="tours/tour">
                  <tr>
                  <td style="width: 100px; padding: 5px;"><xsl:value-of select="tourcity" /> - <xsl:value-of select="tourplace" /></td>
                </tr>
              </xsl:for-each>   
              </table>
            </td>
          </tr>
    </xsl:if>
    </xsl:for-each>
  </table> 
</body>
</html>
</xsl:template>
</xsl:stylesheet>