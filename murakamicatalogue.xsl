<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<body>
<h2>Murakami Catalogue</h2>
<table>
<tr bgcolor="#9966FF">
<th>Title</th>
<th>Translator</th>
<th>Year</th>
<th>Source</th>
</tr>
<xsl:for-each select="catalogue/biblFull">
<xsl:sort select="titleStmt/title"/>
<tr>
<td><xsl:value-of select="titleStmt/title"/></td>
<td><xsl:value-of select="editionStmt/editor"/></td>
<td><xsl:value-of select="publicationStmt/date"/></td>
<td><xsl:value-of select="sourceDesc"/></td>
</tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>