<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="_Default" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
    <div>
    
        <br />
        <br />
        <asp:ListBox ID="ListBox1" runat="server" AutoPostBack="True" OnSelectedIndexChanged="ListBox1_SelectedIndexChanged" SelectionMode="Multiple">
            <asp:ListItem>keyboard</asp:ListItem>
            <asp:ListItem>mouse</asp:ListItem>
            <asp:ListItem>monitor</asp:ListItem>
            <asp:ListItem></asp:ListItem>
        </asp:ListBox>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <asp:ListBox ID="ListBox2" runat="server" AutoPostBack="True" SelectionMode="Multiple" OnSelectedIndexChanged="ListBox2_SelectedIndexChanged">
            <asp:ListItem>300</asp:ListItem>
            <asp:ListItem>250</asp:ListItem>
            <asp:ListItem>2000</asp:ListItem>
        </asp:ListBox>
        <br />
        <br />
        <asp:TextBox ID="TextBox1" runat="server"></asp:TextBox>
&nbsp;&nbsp;&nbsp;
        <asp:Button ID="Button1" runat="server" OnClick="Button1_Click" Text="total bill" />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
    
    </div>
    </form>
</body>
</html>
