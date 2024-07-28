<%@ Page Language="C#" AutoEventWireup="true" CodeFile="about us.aspx.cs" Inherits="about_us" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
    <div>
    
        <asp:RadioButton ID="RadioButton1" runat="server" AutoPostBack="True" GroupName="a" OnCheckedChanged="RadioButton1_CheckedChanged" Text="BCA" />
        <br />
        <br />
        <asp:RadioButton ID="RadioButton2" runat="server" AutoPostBack="True" GroupName="a" OnCheckedChanged="RadioButton2_CheckedChanged" Text="BBA" />
        <br />
        <br />
        <asp:RadioButton ID="RadioButton3" runat="server" AutoPostBack="True" GroupName="a" OnCheckedChanged="RadioButton3_CheckedChanged" Text="Bsc" />
        <br />
        <br />
        <asp:RadioButton ID="RadioButton4" runat="server" AutoPostBack="True" GroupName="a" OnCheckedChanged="RadioButton4_CheckedChanged" Text="B.com" />
    
    </div>
    </form>
</body>
</html>
