<%@ Page Language="C#" AutoEventWireup="true" CodeFile="ragistration form.aspx.cs" Inherits="ragistration_form" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
    <div>
    
        <asp:Label ID="Label1" runat="server" Text="Name"></asp:Label>
        &nbsp;
        <asp:TextBox ID="TextBox1" runat="server"></asp:TextBox>
        &nbsp;&nbsp;
        <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" ControlToValidate="TextBox1" ErrorMessage="should not be blank"></asp:RequiredFieldValidator>
        <br />
        <br />
        <asp:Label ID="Label2" runat="server" Text="Age"></asp:Label>
        &nbsp;
        <asp:TextBox ID="TextBox2" runat="server"></asp:TextBox>
        &nbsp;&nbsp;
        <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" ControlToValidate="TextBox1" ErrorMessage="should not be blank"></asp:RequiredFieldValidator>
        &nbsp;&nbsp;&nbsp;
        <br />
        <br />
        <asp:Label ID="Label3" runat="server" Text="Stream"></asp:Label>
        &nbsp;
        <asp:DropDownList ID="DropDownList1" runat="server">
            <asp:ListItem>BBA</asp:ListItem>
            <asp:ListItem>BCA</asp:ListItem>
            <asp:ListItem>B.com</asp:ListItem>
            <asp:ListItem></asp:ListItem>
        </asp:DropDownList>
        &nbsp;&nbsp;
        <asp:RequiredFieldValidator ID="RequiredFieldValidator3" runat="server" ControlToValidate="DropDownList1" ErrorMessage="should not be blank"></asp:RequiredFieldValidator>
        <br />
        <br />
        <asp:Label ID="Label4" runat="server" Text="Email"></asp:Label>
        &nbsp;
        <asp:TextBox ID="TextBox3" runat="server" TextMode="Email"></asp:TextBox>
        &nbsp;
        <asp:RequiredFieldValidator ID="RequiredFieldValidator4" runat="server" ControlToValidate="TextBox3" ErrorMessage="enter valid email address"></asp:RequiredFieldValidator>
        <br />
        <br />
        <asp:Label ID="Label5" runat="server" Text="contact no"></asp:Label>
        &nbsp;
        <asp:TextBox ID="TextBox4" runat="server" MaxLength="10" TextMode="Phone"></asp:TextBox>
        &nbsp;
        <asp:RequiredFieldValidator ID="RequiredFieldValidator5" runat="server" ControlToValidate="TextBox4" ErrorMessage="should not be blank"></asp:RequiredFieldValidator>
        &nbsp;&nbsp;&nbsp;
        <asp:RegularExpressionValidator ID="RegularExpressionValidator1" runat="server" ControlToValidate="TextBox4" ErrorMessage="should &gt;10" ValidationExpression="\d{10}"></asp:RegularExpressionValidator>
        <br />
        <br />
        <asp:Label ID="Label6" runat="server" Text="password"></asp:Label>
        &nbsp;
        <asp:TextBox ID="TextBox5" runat="server" TextMode="Password"></asp:TextBox>
        &nbsp;&nbsp;&nbsp;
        <asp:RequiredFieldValidator ID="RequiredFieldValidator6" runat="server" ControlToValidate="TextBox5" ErrorMessage="password is blank"></asp:RequiredFieldValidator>
        <br />
        <br />
        <asp:Label ID="Label7" runat="server" Text="confirm password"></asp:Label>
        &nbsp;&nbsp;
        <asp:TextBox ID="TextBox6" runat="server" TextMode="Password"></asp:TextBox>
        &nbsp;&nbsp;
        <asp:RequiredFieldValidator ID="RequiredFieldValidator7" runat="server" ControlToValidate="TextBox6" ErrorMessage="password is blank"></asp:RequiredFieldValidator>
        <br />
        &nbsp; &nbsp;&nbsp;
        <br />
        <br />
        <asp:Button ID="Button1" runat="server" OnClick="Button1_Click" Text="submit" />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <asp:Button ID="Button2" runat="server" OnClick="Button2_Click" style="height: 26px" Text="reset" />
    
    </div>
    </form>
</body>
</html>
