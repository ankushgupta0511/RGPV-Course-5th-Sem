<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
        <body>
        <div align="center">
        <h1>XSL Transformation</h1>
        <table border="1" cellspacing="0" cellpadding="5">
            <tr bgcolor="red">
                <th>Title</th>
                <th>Singer</th>
            </tr>
            <xsl:for-each select="music/tracks/track">
                <tr>
                    <td><xsl:value-of select="title" /></td>
                    <td><xsl:value-of select="singer" /></td>
                </tr>
            </xsl:for-each>
        </table>
        </div>
        </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
