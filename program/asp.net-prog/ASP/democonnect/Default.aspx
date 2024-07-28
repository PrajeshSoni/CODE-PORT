<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="_Default" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
    <div>
    
        <asp:Label ID="Label1" runat="server" Text="Name"></asp:Label>
&nbsp;&nbsp;
        <asp:TextBox ID="t1" runat="server"></asp:TextBox>
        <br />
        <br />
        <asp:Label ID="Label2" runat="server" Text="city"></asp:Label>
&nbsp;&nbsp;
        <asp:DropDownList ID="DropDownList1" runat="server" DataSourceID="SqlDataSource1" DataTextField="Id" DataValueField="Id">
            <asp:ListItem>snagar</asp:ListItem>
            <asp:ListItem>rajkot</asp:ListItem>
            <asp:ListItem>ahmd</asp:ListItem>
            <asp:ListItem>dhg</asp:ListItem>
        </asp:DropDownList>
        <asp:SqlDataSource ID="SqlDataSource1" runat="server" ConnectionString="<%$ ConnectionStrings:ConnectionString %>" SelectCommand="SELECT [Id] FROM [stud]"></asp:SqlDataSource>
        <br />
        <br />
        <asp:Label ID="Label3" runat="server" Text="gender"></asp:Label>
&nbsp;&nbsp;
        <asp:RadioButton ID="RadioButton1" runat="server" GroupName="a" Text="male" />
&nbsp;
        <asp:RadioButton ID="RadioButton2" runat="server" GroupName="a" Text="female" />
        <br />
        <br />
&nbsp;&nbsp;&nbsp;
        <asp:Button ID="Button1" runat="server" OnClick="Button1_Click" Text="submit" />
&nbsp;&nbsp;
    
    </div>
    </form>
</body>
</html>
