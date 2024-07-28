<%@ Page Language="C#" AutoEventWireup="true" CodeFile="querystring.aspx.cs" Inherits="querystring" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
    <div>
    
        <asp:RadioButton ID="RadioButton1" runat="server" OnCheckedChanged="RadioButton1_CheckedChanged" Text="mouse" AutoPostBack="True" GroupName="a" />
        <br />
        <br />
        <asp:RadioButton ID="RadioButton2" runat="server" Text="monitor" AutoPostBack="True" GroupName="a" OnCheckedChanged="RadioButton2_CheckedChanged" />
        <br />
        <br />
        <asp:RadioButton ID="RadioButton3" runat="server" Text="keyboard" AutoPostBack="True" GroupName="a" OnCheckedChanged="RadioButton3_CheckedChanged" />
        <br />
        <br />
        <asp:RadioButton ID="RadioButton4" runat="server" Text="ram" AutoPostBack="True" GroupName="a" OnCheckedChanged="RadioButton4_CheckedChanged" />
    
        <br />
    
    </div>
    </form>
</body>
</html>
