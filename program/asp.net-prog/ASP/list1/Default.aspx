<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="_Default" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
    <div>
    
        <asp:ListBox ID="ListBox1" runat="server" AutoPostBack="True" SelectionMode="Multiple">
            <asp:ListItem>dhara</asp:ListItem>
            <asp:ListItem>himani</asp:ListItem>
            <asp:ListItem>karisma</asp:ListItem>
            <asp:ListItem>kinjal</asp:ListItem>
        </asp:ListBox>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <asp:ListBox ID="ListBox2" runat="server" AutoPostBack="True" SelectionMode="Multiple"></asp:ListBox>
        <br />
        <br />
        <asp:Button ID="Button1" runat="server" OnClick="Button1_Click" Text="&gt;" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <asp:Button ID="Button2" runat="server" Text="&gt;&gt;" />
        <br />
        <br />
        <asp:Button ID="Button3" runat="server" Text="&lt;" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <asp:Button ID="Button4" runat="server" Text="&lt;&lt;" />
        <br />
        <br />
        <br />
        <br />
    
    </div>
    </form>
</body>
</html>
